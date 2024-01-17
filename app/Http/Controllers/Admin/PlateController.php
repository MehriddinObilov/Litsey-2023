<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\plate;
use Illuminate\Support\Facades\File;

class PlateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $plates = plate::all();
        return view('adminpanel.plate.index',compact('plates'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $plates = plate::all();
        return view('adminpanel.plate.create',compact('plates'));
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
            $file->move('plate/',$imageName);          
            $requestData['image'] = $imageName;          
        };

        $plates = plate::create($requestData);
        return redirect()->route('admin.plate.index')->with('success', "Plate qo'shildi ✔️");
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $plates = plate::findOrFail($id);
        return view('adminpanel.plate.show',compact('plates'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $plates = plate::findOrFail($id);
        return view('adminpanel.plate.edit',compact('plates'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $requestData = $request->all();
        $data = plate::find($id);
       
        if ($request->hasFile('image')) {
            $path = 'plate/'. $data->image;  
            if(File::exists($path)) {
                File::delete($path);
            }

            $file = $request->file('image');             
            $imageName = time().''.$file->getClientOriginalName(); 
            $file->move('plate/',$imageName);          
            $requestData['image'] = $imageName;          
        };

        $data->update($requestData);
        return redirect()->route('admin.plate.index')->with('success', "Plate o'zgartitildi✔️");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $plates = plate::findOrFail($id);
        $plates->delete();
        return redirect()->route('admin.plate.index')->with('success','Plate muvaffaqiyatli ochirildi');
    }
}
