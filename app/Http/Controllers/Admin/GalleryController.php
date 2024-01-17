<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Category;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gallerys = Gallery::all();
        return view('adminpanel.gallery.index',compact('gallerys'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('adminpanel.gallery.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $requestData = $request->all();
      
        if ($request->hasFile('image')) {
            $file = $request->file('image');             
            $imageName = time().''.$file->getClientOriginalName(); 
            $file->move('gallery/',$imageName);          
            $requestData['image'] = $imageName;          
        };

        $gallerys = Gallery::create($requestData);
        return redirect()->route('admin.gallery.index')->with('success', " Gallery qo'shildi✔️");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $gallerys = Gallery::findOrfail($id);
        return view('adminpanel.gallery.show',compact('gallerys'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories = Category::all();
        $gallerys = Gallery::findOrfail($id);
        return view('adminpanel.gallery.edit',compact('gallerys','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $requestData = $request->all();
        $data = Gallery::find($id);
       
        if ($request->hasFile('image')) {
            $path = 'gallery/'. $data->image;  
            if(File::exists($path)) {
                File::delete($path);
            }

            $file = $request->file('image');             
            $imageName = time().''.$file->getClientOriginalName(); 
            $file->move('gallery/',$imageName);          
            $requestData['image'] = $imageName;          
        };

        $data->update($requestData);
        return redirect()->route('admin.gallery.index')->with('success', " Gallery o'zgartitildi✔️");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $gallerys = Gallery::findOrFail($id);
        $gallerys->delete();
        return redirect()->route('admin.gallery.index')->with('success',' Malumot  muvaffaqiyatli ochirildi');
    }
}
