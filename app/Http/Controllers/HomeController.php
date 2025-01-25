<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Setting;
use App\Models\Team;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the contact page.
     *
     * @return \Illuminate\View\View
     */
    public function contact()
    {
        $data = [
            'primary_phone_number' => Setting::where('key', 'primary_phone_number')->value('value'),
            'primary_email_address' => Setting::where('key', 'primary_email_address')->value('value'),
            'address' => Setting::where('key', 'address')->value('value'),
        ];
        return view('contact', compact('data'));
    }
    public function home()
    {
        $data = [
            'about_our_company_on_home_page' => Setting::where('key', 'about_our_company_on_home_page')->value('value'),
        ];

        return view('welcome', compact('data'));
    }

    public function projects()
    {
        $projects = Project::orderBy('created_at', 'desc')->paginate(20);
        return view('projects', compact('projects'));
    }
    public function about()
    {
        $teams = Team::select('role', 'description', 'experience', 'name', 'photo')->get();
        $missionStatement = Setting::where('key', 'mission_statement')->value('value');
        $aboutOurCompany = Setting::where('key', 'about_our_company')->value('value');
        return view('about', compact('teams', 'missionStatement', 'aboutOurCompany'));
    }
    public function services()
    {
        return view('services');
    }
}
