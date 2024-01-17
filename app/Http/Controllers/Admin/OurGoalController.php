<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ourGoal;
use Illuminate\Support\Facades\File;

use Str;

class OurGoalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ourGoals = ourGoal::all();
        return view('adminpanel.ourGoal.index', compact('ourGoals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('adminpanel.ourGoal.create');
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
            $file->move('ourGoal/',$imageName);          
            $requestData['image'] = $imageName;          
        };

        $ourGoal = ourGoal::create($requestData);
        return redirect()->route('admin.ourGoal.index')->with('success', "OurGoal qo'shildi✔️");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $ourgoals = ourGoal::findOrFail($id);
        return view('adminpanel.ourGoal.show', compact('ourgoals'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {     
        $ourgoals = ourGoal::findOrFail($id);
        return view('adminpanel.ourGoal.edit',compact('ourgoals'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $requestData = $request->all();
        $data = ourGoal::find($id);
       
        if ($request->hasFile('image')) {
            $path = 'ourGoal/'. $data->image;  
            if(File::exists($path)) {
                File::delete($path);
            }

            $file = $request->file('image');             
            $imageName = time().''.$file->getClientOriginalName(); 
            $file->move('ourGoal/',$imageName);          
            $requestData['image'] = $imageName;          
        };

        $data->update($requestData);
        return redirect()->route('admin.ourGoal.index')->with('success', "OurGoal o'zgartitildi✔️");
        
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $ourgoals = ourGoal::findOrFail($id);
        $ourgoals->delete();
        return redirect()->route('admin.ourGoal.index')->with('success','ourGoal muvaffaqiyatli ochirildi');
    }
}
