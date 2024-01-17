<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\activeteacher;
use Illuminate\Support\Facades\File;

class ActiveTeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Activeteachers = activeteacher::all();
        return view('adminpanel.active_teacher.index',compact('Activeteachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Activeteachers = activeteacher::all();
        return view('adminpanel.active_teacher.create',compact('Activeteachers'));
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
            $file->move('activeteacher/',$imageName);          
            $requestData['image'] = $imageName;          
        };

        $Activeteachers = activeteacher::create($requestData);
        return redirect()->route('admin.activeteacher.index')->with('success', " Active Teachers qo'shildi✔️");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    { 
        $Activeteachers = activeteacher::findOrfail($id);
        return view('adminpanel.active_teacher.show',compact('Activeteachers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $Activeteachers = activeteacher::findOrfail($id);
        return view('adminpanel.active_teacher.edit',compact('Activeteachers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $requestData = $request->all();
        $data = activeteacher::find($id);
       
        if ($request->hasFile('image')) {
            $path = 'activeteacher/'. $data->image;  
            if(File::exists($path)) {
                File::delete($path);
            }

            $file = $request->file('image');             
            $imageName = time().''.$file->getClientOriginalName(); 
            $file->move('activeteacher/',$imageName);          
            $requestData['image'] = $imageName;          
        };

        $data->update($requestData);
        return redirect()->route('admin.activeteacher.index')->with('success', " Active Teacher  o'zgartitildi✔️");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $Activeteachers = activeteacher::findOrFail($id);
        $Activeteachers->delete();
        return redirect()->route('admin.activeteacher.index')->with('success',' Malumot  muvaffaqiyatli ochirildi');
    }
}
