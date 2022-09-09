<?php

namespace App\Http\Controllers;

use App\Models\Image;
use http\Env\Response;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    //
    public function index()
    {
        $images = Image::limit(10)->get();
        return response()->json($images);
    }

    public function storeImage(Request $request)
    {
        $id = $request->id;
        $path = $request->file('image')->store('public/images');

        $image = Image::create([
            "project_id" => $id,
            "src" => $path
        ]);

        return redirect()->route('projects.edit', $id);
    }

    public function makeThumbnail(Request $request){
        $image = $this->getImageById($request->id);
        $image->update([
           "thumbnail" => true
        ]);
        return redirect()->route('projects.edit', $request->id);
    }

    public function removeThumbnail(Request $request){
        $image = $this->getImageById($request->id);
        $image->update([
            "thumbnail" => false
        ]);
        return redirect()->route('projects.edit', $request->id);
    }

    public function getImageById($id){
        return Image::findOrFail($id);
    }
}
