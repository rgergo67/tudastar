<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class TinyMceUploadController extends Controller
{
    public function upload(Request $request)
    {
        // check if the request comes as an ajax-request
        if ($request->ajax()) {
            // validate if the file is an image to protect against bad files uploaded
            $request->validate([
                'image' => 'required|image',
            ]);

            $file = $request->file('image');

            // On file update we get the original name, override existing file
            if (Storage::disk('public')->exists('wysiwyg-uploads/'.$file->getClientOriginalName())) {
                $path = Str::after($file->storeAs('public', 'wysiwyg-uploads/'.$file->getClientOriginalName()), 'public/');
            } else {
                $path = $file->store('wysiwyg-uploads', 'public');
            }

            //respons to the editor
            return response()->json($request->root().'/storage/'.$path, 200, [], JSON_UNESCAPED_SLASHES);
        }

        return abort(404);
    }
}
