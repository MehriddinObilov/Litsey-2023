<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LitseyNew;
use Illuminate\Support\Facades\File;

class LitseyNewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = LitseyNew::all();
        return view('adminpanel.news.index',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $news = LitseyNew::all();
        return view('adminpanel.news.create',compact('news'));
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
            $file->move('news/',$imageName);          
            $requestData['image'] = $imageName;          
        };

        $news = LitseyNew::create($requestData);
        return redirect()->route('admin.news.index')->with('success', " Yangilik  qo'shildi✔️");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $news = LitseyNew::findOrFail($id);
        return view('adminpanel.news.show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
       
        $news = LitseyNew::findOrFail($id);
        return view('adminpanel.news.edit',compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $requestData = $request->all();
        $data = LitseyNew::find($id);
       
        if ($request->hasFile('image')) {
            $path = 'news/'. $data->image;  
            if(File::exists($path)) {
                File::delete($path);
            }

            $file = $request->file('image');             
            $imageName = time().''.$file->getClientOriginalName(); 
            $file->move('news/',$imageName);          
            $requestData['image'] = $imageName;          
        };

        $data->update($requestData);
        return redirect()->route('admin.news.index')->with('success', " Yangiliklar  o'zgartitildi✔️");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $news = LitseyNew::findOrFail($id);
        $news->delete();
        return redirect()->route('admin.news.index')->with('success',' Yangiliklar  muvaffaqiyatli ochirildi');
    }
}
