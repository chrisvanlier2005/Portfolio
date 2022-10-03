<?php

namespace App\Http\Controllers;

use App\Models\Image;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    //
    public function index()
    {
        $images = Image::limit(10)->get();
        return response()->json($images);
    }

    public function store(Request $request)
    {
        $id = $request->project_id;
        $path = $request->file('image')->store('public/images');
        Image::create([
            "project_id" => $id,
            "src" => $path
        ]);
        return redirect()->route('projects.edit', $id);
    }
    /* delete from */
    public function destroy(Image $image, Request $request)
    {
        $id = $request->project_id;
        Storage::delete($image->src);
        $image->delete();
        return redirect()->to('/projects/'.$id.'/edit');
    }

}
