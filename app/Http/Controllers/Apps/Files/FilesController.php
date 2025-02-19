<?php

namespace App\Http\Controllers\Apps\Files;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\File;
use Yajra\DataTables\DataTables;


class FilesController extends Controller
{
    public function openFiles(){

        return view('pages.apps.files.files');

    }
    public function addFile(){
        return view('pages.apps.files.add_file');
    }
    public function fileStore(Request $request)
{
    if ($request->file('fileUpload')->isValid()) {
        $file = $request->file('fileUpload');
        $fileOriginalName = $file->getClientOriginalExtension();
        $fileNewName = time() . '.' . $fileOriginalName;
        $filePath = $request->file('fileUpload')->storeAs('files', $fileNewName,'public');


        File::create([
            'file_type' => $request->file_type,
            'file' => $fileNewName,
        ]);

    }
    return redirect()->route('fileslist')->with('message', 'File Added');
}
    public function getFileList(Request $request)
    {
         
        if ($request->ajax()) {
        // dd("hi");
         
            $files = File::all();

            return DataTables::of($files)
                ->editColumn('file', function($file){

                    if ($file->file_type == 'img') {
                        return '<img src="' . asset('storage/files/'.$file->file) . '" height="70px" width="70px" />';
                    }
                    //if fileType is txt
                    if ($file->file_type == 'txt') {
                        return '<i class="fa-regular fa-file"></i>'." ".$file->file;
                    }
                    if ($file->file_type == 'pdf') {
                        return '<i class="fa-solid fa-file-pdf"></i>'." ".$file->file;
                    }



                    // return '<img src="' . asset('storage/files/'.$file->file) . '" height="70px" width="70px" />';
                    // return '<img src="' . url('files/' . $file->file) . '" height="30px" width="30px" />';
                })
                ->addColumn('action', function ($file) {
                    // $downloadBtn = '<a href="' . route('edit.editRole', $files->id) . '" class="btn btn-sm btn-primary">Edit</a>';
                    $downloadBtn = '<a download href="'.asset('storage/files/'.$file->file) .'" class="btn ms-3 btn-primary btn-sm">download</a>'; 
                    $deleteBtn = '<a href="javascript:void(0)" data-id="' . $file->id . '" class="delete btn btn-danger btn-sm">Delete</a>';
                    return  $deleteBtn . $downloadBtn;
                })
                ->rawColumns(['action','file'])
                ->make(true);
        }
        return view('pages.apps.files.files');
    }
    public function destroyFile($id){
        $file = File::find($id);
        $file_name = File::where('id', $id)->first()->file;
        if(file_exists('app/public/files/'.$file_name)){
            unlink(storage_path('app/public/files/'.$file_name));
        }else{
            echo"File does not exist";
        }
        $file->delete();
        // Storage::disk('local')->delete('storage/files/'.$file_name);
        return response()->json(['message' => 'file deleted successfully']);
    }

}
