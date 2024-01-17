<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\aboutLitsey;
use Illuminate\Support\Facades\File;

// use App\Http\Controllers\AboutLitseyController;

class AboutLitseyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aboutlitseys = aboutLitsey::all();
        return view('adminpanel.litsey.index',compact('aboutlitseys'));             
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('adminpanel.litsey.create');
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
            $file->move('litsey/',$imageName);          
            $requestData['image'] = $imageName;          
        };

        $aboutlitsey = aboutLitsey::create($requestData);
        return redirect()->route('admin.aboutLitsey.index')->with('success', "About Litsey qo'shildi✔️");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $aboutlitsey = aboutLitsey::findOrfail($id);
        return view('adminpanel.litsey.show',compact('aboutlitsey'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $aboutlitsey = aboutLitsey::findOrFail($id);
        return view('adminpanel.litsey.edit',compact('aboutlitsey'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $requestData = $request->all();
        $data = aboutLitsey::find($id);
       
        if ($request->hasFile('image')) {
            $path = 'litsey/'. $data->image;  
            if(File::exists($path)) {
                File::delete($path);
            }

            $file = $request->file('image');             
            $imageName = time().''.$file->getClientOriginalName(); 
            $file->move('litsey/',$imageName);          
            $requestData['image'] = $imageName;          
        };

        $data->update($requestData);
        return redirect()->route('admin.aboutLitsey.index')->with('success', "About Litsey o'zgartitildi✔️");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = aboutLitsey::findOrFail($id);
        $path = 'litsey/'. $data->image;
        if(File::exists($path)) {
            File::delete($path);
        }
        $data->delete();

        return redirect()->route('admin.aboutLitsey.index')->with('success','About Litsey muvaffaqiyatli ochirildi');
    }
}



    