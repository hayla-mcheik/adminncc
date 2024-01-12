<?php

namespace App\Http\Controllers;
use App\Models\SubsidiariesModel;
use Illuminate\Http\Request;

class SubsidiariesController extends Controller
{
    
    public function subsidiaries()
{
    // SubsidiariesModel::create([
    // 'image'=>'',
    // 'name' => '',
    // 'arabic_name' => '',
    // 'arabic_slug' => '',
    // 'description' => '',
    // 'arabic_description' => '',
    // 'services' => '',
    // 'arabic_services' => '',
    // 'website' => '',
    // 'phone' => '',
    // ]);

    $subsidiaries = SubsidiariesModel::all();
    return view('admin.subsidiaries', compact('subsidiaries'));
}

public function addsubsidiaries(Request $request)
{
    $subsidiaries = new SubsidiariesModel();
    $subsidiaries->name = $request->input('name');
    $subsidiaries->arabic_name = $request->input('arabic_name');
    $subsidiaries->slug = $request->input('slug');
    $subsidiaries->arabic_slug = $request->input('arabic_slug');
    $subsidiaries->description = $request->input('description');
    $subsidiaries->arabic_description = $request->input('arabic_description');
    $subsidiaries->services = $request->input('services');
    $subsidiaries->arabic_services = $request->input('arabic_services');
    $subsidiaries->website = $request->input('website');
    $subsidiaries->phone = $request->input('phone');
    if($request->hasFile('image'))
    {
        $image = $request->file('image');
        $fileName = time().rand(1000,50000) . '.' . $image->getClientOriginalExtension();
        $image->move('upload/', $fileName);
        $uploadFile = 'upload/' . $fileName;
        $image=$uploadFile;
        $subsidiaries->image=$image;
    }  
    $subsidiaries->save();
    return back()->withSuccess('Subsidiaries has been added');
}

public function updatesubsidiaries(Request $request , $id)
{
    $subsidiaries = SubsidiariesModel::find($id);
    $subsidiaries->name = $request->input('name');
    $subsidiaries->arabic_name = $request->input('arabic_name');
    $subsidiaries->slug = $request->input('slug');
    $subsidiaries->arabic_slug = $request->input('arabic_slug');
    $subsidiaries->description = $request->input('description');
    $subsidiaries->arabic_description = $request->input('arabic_description');
    $subsidiaries->services = $request->input('services');
    $subsidiaries->arabic_services = $request->input('arabic_services');
    $subsidiaries->website = $request->input('website');
    $subsidiaries->phone = $request->input('phone');
    if($request->hasFile('image'))
    {
        $image = $request->file('image');
        $fileName = time().rand(1000,50000) . '.' . $image->getClientOriginalExtension();
        $image->move('upload/', $fileName);
        $uploadFile = 'upload/' . $fileName;
        $image=$uploadFile;
        $subsidiaries->image=$image;
    }  
    $subsidiaries->save();
    return back()->withSuccess('Subsidiaries has been added');
}

public function deletesubsidiaries($id)
{
    $subsidiaries = SubsidiariesModel::find($id);
    if( $subsidiaries->image!=null) unlink( $subsidiaries->image);
    $subsidiaries->delete();
    return back()->withSuccess('Subsidiaries has been deleted');
}

}
