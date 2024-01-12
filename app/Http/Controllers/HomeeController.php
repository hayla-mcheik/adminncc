<?php

namespace App\Http\Controllers;
use App\Models\HomeHeroModel;
use App\Models\WhoWeAreModel;
use App\Models\ClientsModel;
use Illuminate\Http\Request;

class HomeeController extends Controller
{
public function home()
{

    // HomeHeroModel::create([
    //     'image'=>'',
    //     'title'=>'',
    //     'description'=>'',
    //     'arabic_title' => '',
    //     'arabic_description' => '',
    //     'imageone'=>'',
    //     'imagetwo'=>'',
    //     'imagethree'=>'',
    //     'imagefour'=>'',
    //     'imagefive'=>'',
    // ]);
    $homehero = HomeHeroModel::first();
    return view('admin.home.hero',compact('homehero'));
}

public function updatehomehero(Request $request)
{
    $homehero = HomeHeroModel::first();
    $homehero->title=$request->input('title');
    $homehero->arabic_title=$request->input('arabic_title');
    $homehero->description=$request->input('description');
    $homehero->arabic_description=$request->input('arabic_description');
    if($request->hasFile('image'))
    {
        $image = $request->file('image');
        $fileName = time().rand(1000,50000) . '.' . $image->getClientOriginalExtension();
        $image->move('upload/', $fileName);
        $uploadFile = 'upload/' . $fileName;
        $image=$uploadFile;
        $homehero->image=$image;
    }  


    if($request->hasFile('imageone'))
    {
        $imageone = $request->file('imageone');
        $fileName = time().rand(1000,50000) . '.' . $imageone->getClientOriginalExtension();
        $imageone->move('upload/', $fileName);
        $uploadFile = 'upload/' . $fileName;
        $imageone=$uploadFile;
        $homehero->imageone=$imageone;
    } 

    if($request->hasFile('imagetwo'))
    {
        $imagetwo = $request->file('imagetwo');
        $fileName = time().rand(1000,50000) . '.' . $imagetwo->getClientOriginalExtension();
        $imagetwo->move('upload/', $fileName);
        $uploadFile = 'upload/' . $fileName;
        $imagetwo=$uploadFile;
        $homehero->imagetwo=$imagetwo;
    } 

    if($request->hasFile('imagethree'))
    {
        $imagethree = $request->file('imagethree');
        $fileName = time().rand(1000,50000) . '.' . $imagethree->getClientOriginalExtension();
        $imagethree->move('upload/', $fileName);
        $uploadFile = 'upload/' . $fileName;
        $imagethree=$uploadFile;
        $homehero->imagethree=$imagethree;
    } 

    if($request->hasFile('imagefour'))
    {
        $imagefour = $request->file('imagefour');
        $fileName = time().rand(1000,50000) . '.' . $imagefour->getClientOriginalExtension();
        $imagefour->move('upload/', $fileName);
        $uploadFile = 'upload/' . $fileName;
        $imagefour=$uploadFile;
        $homehero->imagefour=$imagefour;
    } 

    if($request->hasFile('imagefive'))
    {
        $imagefive = $request->file('imagefive');
        $fileName = time().rand(1000,50000) . '.' . $imagefive->getClientOriginalExtension();
        $imagefive->move('upload/', $fileName);
        $uploadFile = 'upload/' . $fileName;
        $imagefive=$uploadFile;
        $homehero->imagefive=$imagefive;
    }  

    $homehero->update();
    return back()->withSuccess('Hero background has been updated');
}

public function whoweare()
{
    //    WhoWeAreModel::create([
    //     'image'=>'',
    //     'title'=>'',
    //     'arabic_title'=>'',
    //     'description'=>'',
    //     'arabic_description'=>'',
    // ]);
    $homewhoweare = WhoWeAreModel::first();
    return view('admin.home.whoweare',compact('homewhoweare'));
}
public function updatewhoweare(Request $request)
{

    $homewhoweare = WhoWeAreModel::first();
    $homewhoweare->title=$request->input('title');
    $homewhoweare->arabic_title=$request->input('arabic_title');
    $homewhoweare->description=$request->input('description');
    $homewhoweare->arabic_description=$request->input('arabic_description');
    if($request->hasFile('image'))
    {
        $image = $request->file('image');
        $fileName = time().rand(1000,50000) . '.' . $image->getClientOriginalExtension();
        $image->move('upload/', $fileName);
        $uploadFile = 'upload/' . $fileName;
        $image=$uploadFile;
        $homewhoweare->image=$image;
    }  
    $homewhoweare->update();
    return back()->withSuccess('Who We Are has been updated');
}

public function clients()
{
    // ClientsModel::create([
    // 'image'=>'',
    // ]);

    $clients = ClientsModel::all();
    return view('admin.home.clients', compact('clients'));
}

public function addclients(Request $request)
{
    $clients = new ClientsModel();
    if($request->hasFile('image'))
    {
        $image = $request->file('image');
        $fileName = time().rand(1000,50000) . '.' . $image->getClientOriginalExtension();
        $image->move('upload/', $fileName);
        $uploadFile = 'upload/' . $fileName;
        $image=$uploadFile;
        $clients->image=$image;
    }  
    $clients->save();
    return back()->withSuccess('Client has been added');
}

public function updateclients(Request $request , $id)
{
    $clients = ClientsModel::find($id);
    if($request->hasFile('image'))
    {
        $image = $request->file('image');
        $fileName = time().rand(1000,50000) . '.' . $image->getClientOriginalExtension();
        $image->move('upload/', $fileName);
        $uploadFile = 'upload/' . $fileName;
        $image=$uploadFile;
        $clients->image=$image;
    }  
    $clients->update();
    return back()->withSuccess('Client has been updated');
}

public function deleteclients($id)
{
    $clients = ClientsModel::find($id);
    if($clients->image!=null) unlink($clients->image);
    $clients->delete();
    return back()->withSuccess('Client has been deleted');
}


}
