<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BibleStudy;

class BibleStudyController extends Controller
{

    public function form (Request $request)
    {
        $biblestudy = new BibleStudy;
        return view('form', compact('biblestudy'));
    }

    public function createform (Request $request)
    {
        $biblestudy = new BibleStudy;
        $biblestudy-> complete_name = $request -> complete_name;
        $biblestudy-> email_address = $request -> email_address;
        $biblestudy-> contact_number = $request -> contact_number;
        $biblestudy-> birthdate = $request -> birthdate;
        $biblestudy-> religious_affiliation = $request -> religious_affiliation;
        $biblestudy-> bible_study_date = $request -> bible_study_date;
        $biblestudy-> bible_study_time = $request -> bible_study_time;
        $biblestudy-> bible_study_location = $request -> bible_study_location;
        if ($biblestudy ->save()){
            return redirect ('/thank-you');
        }
        return redirect('/thank-you');
    }

    public function table (Request $request)
    {
        $biblestudy = BibleStudy::all();
        return view('table', compact('biblestudy'));
    }
    public function thankyou (Request $request)
    {
        $biblestudy = new BibleStudy;
        return view('thankyou');
    }
}