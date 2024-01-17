<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Structure;
use Illuminate\Support\Facades\File;

class StructureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $structures = Structure::all();
       return view('adminpanel.structure.index',compact('structures'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $structures = Structure::all();
        return view('adminpanel.structure.create',compact('structures'));
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
            $file->move('structure/',$imageName);          
            $requestData['image'] = $imageName;          
        };

        $structures = Structure::create($requestData);
        return redirect()->route('admin.structure.index')->with('success', "Structure qo'shildi ✔️");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $structures = Structure::findOrfail($id);
        return view('adminpanel.structure.show',compact('structures'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $structures = Structure::findOrFail($id);
        return view('adminpanel.structure.edit',compact('structures'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $requestData = $request->all();
        $data = Structure::find($id);
       
        if ($request->hasFile('image')) {
            $path = 'structure/'. $data->image;  
            if(File::exists($path)) {
                File::delete($path);
            }

            $file = $request->file('image');             
            $imageName = time().''.$file->getClientOriginalName(); 
            $file->move('structure/',$imageName);          
            $requestData['image'] = $imageName;          
        };

        $data->update($requestData);
        return redirect()->route('admin.structure.index')->with('success', " Structures o'zgartitildi✔️");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $structures = Structure::findOrFail($id);
        $structures->delete();
        return redirect()->route('admin.structure.index')->with('success','Structure muvaffaqiyatli ochirildi');
    }
}
