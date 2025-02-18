<?php

namespace App\Http\Controllers\Files;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function store(Request $request)
    {
        $file_get = $request->file;
        foreach ($file_get as $file) {
            $fileOriginalName = $file->getClientOriginalExtension();
            $fileNewName = time() .'.'. $fileOriginalName;
            $file->storeAs('files', $fileNewName, 'public'); //here images is folder, $fileNewName is files new name, public indicated public folder. that means folder this image in public/storage/images folder
            Gallery::create([
                'album' => $request->album,
                'image' => $fileNewName
            ]);
        }
      return redirect()->back()->with('message', 'Photos Added');
    }

}
