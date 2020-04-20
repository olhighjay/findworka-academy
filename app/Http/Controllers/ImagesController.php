<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class ImagesController extends Controller
{
    public function create()
    {
        return view('test.new');
    }

    public function store(Request $request)
    {
        $this->validate($request, 
        [
            'title' => 'nullable|max:250',
            'file' => 'required|image|max:2000'
        ]);

        if($request->hasFile('file')){
            $file = $request->file;
            $ext = $file->getClientOriginalExtension();
            $filename = uniqid().'.'.$ext;
            $filePath = 'files/' . $filename;
            Storage::disk('s3')->put($filePath, file_get_contents($file));
        }
        // $path = Storage::disk('s3')->put('images/originals', $request->file);
        // $request->merge([
        //     'size' => $request->file->getClientSize(),
        //     'path' => $path
        // ]);
        return back()->with('success', 'Image Successfully Saved');
    
    }
}
