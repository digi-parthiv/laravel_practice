<?php

namespace App\Http\Controllers\Apps\Files;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\Category;



class CategoryController extends Controller
{
    public function openCategory(){
        return view('pages.apps.categories.category');
    }

    public function getCategoryList(Request $request){
        if ($request->ajax()) {         
            $categories = Category::all();
            return DataTables::of($categories)
                ->addColumn('action', function ($category) {
                    // $downloadBtn = '<a href="' . route('edit.editRole', $files->id) . '" class="btn btn-sm btn-primary">Edit</a>';
                    // $downloadBtn = '<a download href="'.asset('storage/files/'.$file->file) .'" class="btn ms-3 btn-primary btn-sm">download</a>'; 
                    $deleteBtn = '<a href="javascript:void(0)" data-id="' . $category->id . '" class="delete btn btn-danger btn-sm">Delete</a>';
                    return  $deleteBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('pages.apps.categories.category');
    }

    public function addCategory(){
        return view('pages.apps.categories.add_category');
    }

    public function categoryStore(Request $request){
        Category::create([
            'name'=> $request->name,
        ]);
        return redirect()->route('CategoryList')->with('message', 'File Added');
    }

    public function destroyCategory($id){
        dd($id);
        $category= Category::find($id);
        $category->delete();
        return response()->json(['message' => 'file deleted successfully']);
    }

}
