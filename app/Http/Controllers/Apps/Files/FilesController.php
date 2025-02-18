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
        $filePath = $request->file('fileUpload')->store('uploads', 'public');
       

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
                    // {{ asset('storage/files/' . $value->images }}
                    return '<img src="' . asset('storage/files/'.$file->file) . '" height="30px" width="30px" />';
                    // return '<img src="' . url('files/' . $file->file) . '" height="30px" width="30px" />';

                })
                ->addColumn('action', function ($file) {
                    // $downloadBtn = '<a href="' . route('edit.editRole', $files->id) . '" class="btn btn-sm btn-primary">Edit</a>';
                    $downloadBtn = '<a href="'.asset("public/files/") .'" class="btn btn-xs  btn-primary"><i class="glyphicon glyphicon-download-alt"></i></a>'; 
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
        $file->delete();
        return response()->json(['message' => 'file deleted successfully']);
    }

}
