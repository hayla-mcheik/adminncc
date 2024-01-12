<?php

namespace App\Http\Controllers;
use App\Models\LatestNewsModel;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LatestNewsController extends Controller
{
    public function latestnews()
    {
      $latestnews= LatestNewsModel::all();
       return view('admin.latest',compact('latestnews'));
    }
    public function addlatestnews(Request $request)
{
    $latestnews = new LatestNewsModel();
    $latestnews->title = $request->input('title');
    $latestnews->arabic_title = $request->input('arabic_title');
    $latestnews->date = $request->input('date');
    $latestnews->description = $request->input('description');
    $latestnews->arabic_description = $request->input('arabic_description');
    
    if($request->hasFile('imageone'))
    {
        $imageone = $request->file('imageone');
        $fileName = time().rand(1000,50000) . '.' . $imageone->getClientOriginalExtension();
        $imageone->move('upload/', $fileName);
        $uploadFile = 'upload/' . $fileName;
        $imageone=$uploadFile;
        $latestnews->imageone=$imageone;
    }  
    if($request->hasFile('imagetwo'))
    {
        $imagetwo = $request->file('imagetwo');
        $fileName = time().rand(1000,50000) . '.' . $imagetwo->getClientOriginalExtension();
        $imagetwo->move('upload/', $fileName);
        $uploadFile = 'upload/' . $fileName;
        $imagetwo=$uploadFile;
        $latestnews->imagetwo=$imagetwo;
    } 
    $latestnews->save();
    return back()->withSuccess('Latest News has been added');
}

public function updatelatestnews(Request $request , $id)
{
    $latestnews = LatestNewsModel::find($id);
    $latestnews->title = $request->input('title');
    $latestnews->arabic_title = $request->input('arabic_title');
    $latestnews->date = $request->input('date');
    $latestnews->description = $request->input('description');
    $latestnews->arabic_description = $request->input('arabic_description');
    
    if($request->hasFile('imageone'))
    {
        $imageone = $request->file('imageone');
        $fileName = time().rand(1000,50000) . '.' . $imageone->getClientOriginalExtension();
        $imageone->move('upload/', $fileName);
        $uploadFile = 'upload/' . $fileName;
        $imageone=$uploadFile;
        $latestnews->imageone=$imageone;
    }  
    if($request->hasFile('imagetwo'))
    {
        $imagetwo = $request->file('imagetwo');
        $fileName = time().rand(1000,50000) . '.' . $imagetwo->getClientOriginalExtension();
        $imagetwo->move('upload/', $fileName);
        $uploadFile = 'upload/' . $fileName;
        $imagetwo=$uploadFile;
        $latestnews->imagetwo=$imagetwo;
    } 
    $latestnews->update();
    return back()->withSuccess('Latest News has been updated');
}

public function deletelatestnews($id)
{
    $latestnews = LatestNewsModel::find($id);
    if($latestnews->image!=null) unlink($latestnews->image);
    $latestnews->delete();
    return back()->withSuccess('Latest News has been deleted');
}
}
