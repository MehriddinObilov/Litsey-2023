<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\info;
use Illuminate\Support\Facades\File;

class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $infos = info::all();
        return view('adminpanel.info.index',compact('infos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $infos = info::all();
        return view('adminpanel.info.create',compact('infos'));
        
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
            $file->move('info/',$imageName);          
            $requestData['image'] = $imageName;          
        };

        $infos = info::create($requestData);
        return redirect()->route('admin.info.index')->with('success', " Ma'lumot qo'shildi ✔️");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $infos = info::findOrFail($id);
        return view('adminpanel.info.show',compact('infos'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $infos = info::findOrFail($id);
        return view('adminpanel.info.edit',compact('infos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $requestData = $request->all();
        $data = info::find($id);
       
        if ($request->hasFile('image')) {
            $path = 'info/'. $data->image;  
            if(File::exists($path)) {
                File::delete($path);
            }

            $file = $request->file('image');             
            $imageName = time().''.$file->getClientOriginalName(); 
            $file->move('info/',$imageName);          
            $requestData['image'] = $imageName;          
        };

        $data->update($requestData);
        return redirect()->route('admin.info.index')->with('success', " Yangiliklar  o'zgartitildi✔️");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $infos = info::findOrFail($id);
        $infos->delete();
        return redirect()->route('admin.info.index')->with('success',' Malumot  muvaffaqiyatli ochirildi');
    }
}
