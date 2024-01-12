<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Validator;
use App\Models\HomeHeroModel;
use App\Models\WhoWeAreModel;
use App\Models\ClientsModel;
use App\Models\AboutHeroModel;
use App\Models\AboutValues;
use App\Models\TeamModel;
use App\Models\MilestoneModel;
use App\Models\ContactModel;
use App\Models\LatestNewsModel;
use App\Models\SubsidiariesModel;
use App\Models\CareersModel;

class ApiController extends Controller
{


    public function homeScreen()
    {
        $homehero = HomeHeroModel::first();
        $homewhoweare = WhoWeAreModel::first();
        $clients = ClientsModel::all();
        $subsidiaries = SubsidiariesModel::take(5)->get();
        $latestnews= LatestNewsModel::take(5)->get();
        return response()->json([
            'status' => 200, 'homehero' => $homehero, 'homewhoweare' => $homewhoweare , 'clients' => $clients , 'subsidiaries' => $subsidiaries , 'latestnews' => $latestnews
        ]);
    }


    public function aboutScreen()
    {
        $heroabout = AboutHeroModel::first();
        $values = AboutValues::first();
        $team = TeamModel::all();
        $milestone = MilestoneModel::all();
        $contact = ContactModel::first();
        return response()->json([
            'status' => 200, 'heroabout' => $heroabout, 'values' => $values , 'team' => $team , 'milestone' => $milestone , 'contact' => $contact
        ]);
    }
    
    public function contactScreen()
    {
                $contact = ContactModel::first();
                return response()->json([
                    'status' => 200 , 'contact' => $contact
                    ]);
    }
    public function teamScreen()
    {

        $team = TeamModel::all();
        return response()->json([
            'status' => 200, 'team' => $team 
        ]);
    }
    
    
    
    public function getteamDetails($id)
    {

        $team = TeamModel::find($id);
        return response()->json([
            'status' => 200, 'team' => $team 
        ]);
    }
    

    public function newsScreen()
    {
        $latestnews= LatestNewsModel::all();
        return response()->json([
            'status' => 200, 'latestnews' => $latestnews
        ]);
    }
    
    
        public function getnewsDetails($id)
    {
        $latestnews= LatestNewsModel::find($id);
        return response()->json([
            'status' => 200, 'latestnews' => $latestnews
        ]);
    }
    
    
    public function subsidiariesScreen()
    {
        $subsidiaries = SubsidiariesModel::all();
        return response()->json([
            'status' => 200, 'subsidiaries' => $subsidiaries, 
        ]);
    }

    public function getsubsidiariesDetails($id)
    {
           $subsidiaries = SubsidiariesModel::find($id);
                  return response()->json([
            'status' => 200, 'subsidiaries' => $subsidiaries, 
        ]);
    }









public function enquiry(Request $request)
{
    // Define the validation rules
    $rules = [
        'fname' => 'required',
        'lname' => 'required',
        'email' => 'required',
        'msg' => 'required',
        'phone' => 'required',
    ];

    // Validate the request data
    $validator = Validator::make($request->all(), $rules, [
        'fname.required' => 'Please enter your first name.',
        'lname.required' => 'Please enter your last name.',
    ]);

  
        if ($validator->fails()) {
            return response()->json($validator->errors()->first(), 400);
        } else {


        // Build the email message
        $message ="A new user has reached out to the Go project \nName:" .$request->fname. " " .$request->lname. "\nPhone:" .$request->phone.
        "\nEmail:" .$request->email. "\nMessage:" .$request->msg;
        
        // Set up the email data
        $to = 'mcheikhayla26@gmail.com';
        $subject = 'Enquiry Form';
        $headers = "From: $request->email \r\n";
        
        // Send the email using the PHP mail() function
        $result = mail($to, $subject, $headers, $message);

        if ($result) {
            response()->json(['msg' => 'success']);
        } else {
            return response()->json(['error' => 'Error sending mail'], 500);
        }

        }
}



public function contactus(Request $request)
{
    // Define the validation rules
    $rules = [
        'fname' => 'required',
        'lname' => 'required',
        'email' => 'required',
        'msg' => 'required',
        'phone' => 'required',
    ];

    // Validate the request data
    $validator = Validator::make($request->all(), $rules, [
        'fname.required' => 'Please enter your first name.',
        'lname.required' => 'Please enter your last name.',
    ]);

  
        if ($validator->fails()) {
            return response()->json($validator->errors()->first(), 400);
        } else {


        // Build the email message
        $message ="A new user has reached out to the Go project \nName:" .$request->fname. " " .$request->lname. "\nPhone:" .$request->phone.
        "\nEmail:" .$request->email. "\nMessage:" .$request->msg;
        
        // Set up the email data
        $to = 'mcheikhayla26@gmail.com';
        $subject = 'Contact Form';
        $headers = "From: $request->email \r\n";

        
        // Send the email using the PHP mail() function
        $result = mail($to, $subject, $headers, $message);

        if ($result) {
            response()->json(['msg' => 'success']);
        } else {
            return response()->json(['error' => 'Error sending mail'], 500);
        }

        }
}



public function quote(Request $request)
{
    // Define the validation rules
    $rules = [
        'fname' => 'required',
        'lname' => 'required',
        'email' => 'required',
        'msg' => 'required',
        'phone' => 'required',
    ];

    // Validate the request data
    $validator = Validator::make($request->all(), $rules, [
        'fname.required' => 'Please enter your first name.',
        'lname.required' => 'Please enter your last name.',
    ]);

  
        if ($validator->fails()) {
            return response()->json($validator->errors()->first(), 400);
        } else {


        // Build the email message
        $message ="A new user has reached out to the Go project \nName:" .$request->fname. " " .$request->lname. "\nPhone:" .$request->phone.
        "\nEmail:" .$request->email. "\nMessage:" .$request->msg;
        
        // Set up the email data
        $to = 'mcheikhayla26@gmail.com';
        $subject = 'Get a Quote Form';
        $headers = "From: $request->email \r\n";

        
        // Send the email using the PHP mail() function
        $result = mail($to, $subject, $headers, $message);

        if ($result) {
            response()->json(['msg' => 'success']);
        } else {
            return response()->json(['error' => 'Error sending mail'], 500);
        }

        }
}



public function careers(Request $request)
{
    // Define the validation rules
    $rules = [
        'fname' => 'required',
        'lname' => 'required',
        'email' => 'required',
       'linkone' => 'required',
        'file' => 'required|file'
    ];

    // Validate the request data
    $validator = Validator::make($request->all(), $rules, [
        'fname.required' => 'Please enter your first name.',
        'lname.required' => 'Please enter your last name.',
        'linkone.required' => 'Please enter at least the first link.',
    ]);

    if ($validator->fails()) {
        return response()->json($validator->errors()->first(), 400);
    } else {
            $careers = new CareersModel();
            $careers->fname = $request->fname;
            $careers->lname = $request->lname;
            $careers->email = $request->email;
            $careers->linkone = $request->linkone;
            $careers->linktwo = $request->linktwo;
            $careers->linkthree = $request->linkthree;
        if($request->hasFile('file'))
        {
            $file = $request->file('file');
            $fileName = time().rand(1000,50000) . '.' . $file->getClientOriginalExtension();
            $file->move('resume/', $fileName);
            $uploadFile = 'resume/' . $fileName;
            $file=$uploadFile;
            $careers->file=$file;
        }  
            $careers->save();
            return response()->json(['msg' => 'success']);
    }
}
    

public function subscribe(Request $request)
{
    $rules = [
        'email' => 'required|email|unique:subscribe,email',
    ];

    $validator = Validator::make($request->all(), $rules);

    if ($validator->fails()) {
        return response()->json($validator->errors()->first(), 400);
    } else {
        $sub = new Subscribe();
        $sub->email = $request->email;
        $sub->save();

        // Build the email message
        $message = "A new user has subscribed to the Go project \nEmail:" . $request->email;

        // Set up the email data
        $to = 'mcheikhayla26@gmail.com';
        $subject = 'Subscribe Form';
        $headers = "From: $request->email \r\n";

        // Send the email using the PHP mail() function
        $result = mail($to, $subject, $headers, $message);

        if ($result) {
            return response()->json(['msg' => 'success']);
        } else {
            return response()->json(['error' => 'Error sending mail'], 500);
        }
    }
}


}
