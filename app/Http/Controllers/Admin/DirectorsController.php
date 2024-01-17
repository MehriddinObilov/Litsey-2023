<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\director;
use Illuminate\Support\Facades\File;

class DirectorsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $directors = director::all();
        return view('adminpanel.directors.index',compact('directors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $directors = director::all();
        return view('adminpanel.directors.create',compact('directors'));
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
            $file->move('directors/',$imageName);          
            $requestData['image'] = $imageName;          
        };

        $directors = director::create($requestData);
        return redirect()->route('admin.director.index')->with('success', " Director qo'shildi✔️");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $directors = director::findOrfail($id);
        return view('adminpanel.directors.show',compact('directors'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $directors = director::findOrFail($id);
        return view('adminpanel.directors.edit',compact('directors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $requestData = $request->all();
        $data = director::find($id);
       
        if ($request->hasFile('image')) {
            $path = 'directors/'. $data->image;  
            if(File::exists($path)) {
                File::delete($path);
            }

            $file = $request->file('image');             
            $imageName = time().''.$file->getClientOriginalName(); 
            $file->move('directors/',$imageName);          
            $requestData['image'] = $imageName;          
        };

        $data->update($requestData);
        return redirect()->route('admin.director.index')->with('success', " Directors o'zgartitildi✔️");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $directors = director::findOrFail($id);
        $directors->delete();
        return redirect()->route('admin.director.index')->with('success','Director muvaffaqiyatli ochirildi');
    }
}
