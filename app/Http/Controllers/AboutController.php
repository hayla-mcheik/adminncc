<?php

namespace App\Http\Controllers;
use App\Models\AboutHeroModel;
use App\Models\AboutValues;
use App\Models\TeamModel;
use App\Models\MilestoneModel;
use App\Models\ContactModel;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        // AboutHeroModel::create([
        //     'title' => '',
        //     'arabic_title' => '',
        //     'description' => '',
        //     'arabic_description' => '',
        //     'image' => '',
        //     'imageone' => '',
        //     'imagetwo' =>''
        // ]);

        $heroabout = AboutHeroModel::first();
        return view('admin.about.hero' , compact('heroabout'));
    }

    public function updateheroabout(Request $request)
    {
$heroabout = AboutHeroModel::first();
$heroabout->title = $request->input('title');
$heroabout->arabic_title = $request->input('arabic_title');
$heroabout->arabic_description = $request->input('arabic_description');
$heroabout->description = $request->input('description');
if($request->hasFile('image'))
{
    $image = $request->file('image');
    $fileName = time().rand(1000,50000) . '.' . $image->getClientOriginalExtension();
    $image->move('upload/', $fileName);
    $uploadFile = 'upload/' . $fileName;
    $image=$uploadFile;
    $heroabout->image=$image;
}  

if($request->hasFile('imageone'))
{
    $imageone = $request->file('imageone');
    $fileName = time().rand(1000,50000) . '.' . $imageone->getClientOriginalExtension();
    $imageone->move('upload/', $fileName);
    $uploadFile = 'upload/' . $fileName;
    $imageone=$uploadFile;
    $heroabout->imageone=$imageone;
}  

if($request->hasFile('imagetwo'))
{
    $imagetwo = $request->file('imagetwo');
    $fileName = time().rand(1000,50000) . '.' . $imagetwo->getClientOriginalExtension();
    $imagetwo->move('upload/', $fileName);
    $uploadFile = 'upload/' . $fileName;
    $imagetwo=$uploadFile;
    $heroabout->imagetwo=$imagetwo;
}  

$heroabout->update();
return back()->withSuccess('Hero background has been updated');
    }

    public function aboutvalues()
    {
        // AboutValues::create([
        //     'titleone' => '',
        //     'arabic_titleone' => '',
        //     'descone' => '',
        //     'arabic_descone' => '',
        //     'titletwo' => '',
        //     'arabic_titletwo' => '',
        //     'desctwo' => '',
        //     'arabic_desctwo' => '',
        //     'titlethree' => '',
        //     'arabic_titlethree' => '',
        //     'descthree' => '',
        //     'arabic_descthree' => '',
        //     'titlefour' => '',
        //     'arabic_titlefour' => '',
        //     'descfour' => '',
        //     'arabic_descfour' => ''
        // ]);

        $values = AboutValues::first();
        return view('admin.about.values',compact('values'));
    }
    
    public function updateaboutvalues(Request $request)
    {
        $values = AboutValues::first();
        $values->titleone = $request->input('titleone');
        $values->arabic_titleone = $request->input('arabic_titleone');
        $values->descone = $request->input('descone');
        $values->arabic_descone = $request->input('arabic_descone');
        $values->titletwo= $request->input('titletwo');
        $values->arabic_titletwo= $request->input('arabic_titletwo');
        $values->desctwo = $request->input('desctwo');
        $values->arabic_desctwo = $request->input('arabic_desctwo');
        $values->titlethree = $request->input('titlethree');
        $values->arabic_titlethree = $request->input('arabic_titlethree');
        $values->descthree = $request->input('descthree');
        $values->arabic_descthree = $request->input('arabic_descthree');
        $values->titlefour= $request->input('titlefour');
        $values->arabic_titlefour= $request->input('arabic_titlefour');
        $values->descfour= $request->input('descfour');
        $values->arabic_descfour= $request->input('arabic_descfour');
        $values->update();
        return back()->withSuccess('About Values has been updated');
    }


    public function team()
{
    // TeamModel::create([
    // 'image'=>'',
    // 'name' => '',
    // 'arabic_name' => '',
    // 'description' => '',
    // 'arabic_description' => ''
    // ]);

    $team = TeamModel::all();
    return view('admin.about.team', compact('team'));
}

public function addteam(Request $request)
{
    $team = new TeamModel();
$team->name = $request->input('name');
$team->arabic_name = $request->input('arabic_name');
$team->title = $request->input('title');
$team->arabic_title = $request->input('arabic_title');
$team->description = $request->input('description');
$team->arabic_description = $request->input('arabic_description');
    if($request->hasFile('image'))
    {
        $image = $request->file('image');
        $fileName = time().rand(1000,50000) . '.' . $image->getClientOriginalExtension();
        $image->move('upload/', $fileName);
        $uploadFile = 'upload/' . $fileName;
        $image=$uploadFile;
        $team->image=$image;
    }  
    $team->save();
    return back()->withSuccess('Team  has been added');
}

public function updateteam(Request $request , $id)
{
    $team = TeamModel::find($id);
    $team->name = $request->input('name');
    $team->arabic_name = $request->input('arabic_name');
    $team->title = $request->input('title');
    $team->arabic_title = $request->input('arabic_title');
    $team->description = $request->input('description');
    $team->arabic_description = $request->input('arabic_description');
        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $fileName = time().rand(1000,50000) . '.' . $image->getClientOriginalExtension();
            $image->move('upload/', $fileName);
            $uploadFile = 'upload/' . $fileName;
            $image=$uploadFile;
            $team->image=$image;
        }  
        $team->save();
        return back()->withSuccess('Team  has been added');
}

public function deleteteam($id)
{
    $team = TeamModel::find($id);
    if($team->image!=null) unlink($team->image);
    $team->delete();
    return back()->withSuccess('Team has been deleted');
}






public function milestone()
{
    // MilestoneModel::create([
    // 'date'=>'',
    // 'title' => '',
    // 'arabic_title' => '',
    // 'arabic_description' => ''
    // ]);

    $milestone = MilestoneModel::all();
    return view('admin.milestone', compact('milestone'));
}

public function addmilestone(Request $request)
{
    $milestone = new MilestoneModel();
    $milestone->date = $request->input('date');
    $milestone->title = $request->input('title');
    $milestone->arabic_title = $request->input('arabic_title');
    $milestone->description = $request->input('description');
    $milestone->arabic_description = $request->input('arabic_description');
    $milestone->save();
    return back()->withSuccess('Milestone  has been added');
}

public function updatemilestone(Request $request , $id)
{
    $milestone = MilestoneModel::find($id);
    $milestone->date = $request->input('date');
    $milestone->title = $request->input('title');
    $milestone->arabic_title = $request->input('arabic_title');
    $milestone->description = $request->input('description');
    $milestone->arabic_description = $request->input('arabic_description');
    $milestone->save();
    return back()->withSuccess('Milestone  has been added');
}

public function deletemilestone($id)
{
    $milestone= MilestoneModel::find($id);
    $milestone->delete();
    return back()->withSuccess('Milestone has been deleted');
}


public function contact()
{
    // ContactModel::create([
    //     'tel_head_uae' => '',
    //     'fax_head_uae' => '',
    //     'tel_ncc_uae' => '',
    //     'fax_ncc_uae' => '',
    //     'tel_dubai_uae' => '',
    //     'fax_dubai_uae' => '',
    //     'tel_head_kwt' => '',
    //     'fax_head_kwt' => '',
    //     'tel_ncc_kwt' => '',
    //     'fax_ncc_kwt' => '',
    //     'tel_dubai_kwt' => '',
    //     'fax_dubai_kwt' => '',

    // ]);

    $contact = ContactModel::first();
    return view('admin.contact',compact('contact'));
}


public function updatecontact(Request $request)
{
    $contact = ContactModel::first();
    $contact->tel_head_uae = $request->input('tel_head_uae');
    $contact->fax_head_uae = $request->input('fax_head_uae');
    $contact->tel_ncc_uae= $request->input('tel_ncc_uae');
    $contact->fax_ncc_uae = $request->input('fax_ncc_uae');
    $contact->tel_dubai_uae = $request->input('tel_dubai_uae');
    $contact->fax_dubai_uae = $request->input('fax_dubai_uae');
    $contact->tel_head_kwt = $request->input('tel_head_kwt');
    $contact->fax_head_kwt = $request->input('fax_head_kwt');
    $contact->tel_ncc_kwt = $request->input('tel_ncc_kwt');
    $contact->fax_ncc_kwt = $request->input('fax_ncc_kwt');
    $contact->tel_dubai_kwt = $request->input('tel_dubai_kwt');
    $contact->fax_dubai_kwt = $request->input('fax_dubai_kwt');
    $contact->update();
    return back()->withSuccess('Contact has been updated');
}

}
