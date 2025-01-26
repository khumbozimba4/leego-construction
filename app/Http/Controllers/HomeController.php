<?php

namespace App\Http\Controllers;

use App\Models\Equipment;
use App\Models\Project;
use App\Models\Quotation;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Team;
use Carbon\Carbon;
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
            'services' => Service::all(),
            'projectsCount' => Project::count(),
            'teamCount' => Team::count()
        ];

        return view('welcome', compact('data'));
    }
    public function addToCart($id)
    {
        $equip = Equipment::findOrFail($id);
        return view('quotation', compact('equip'));
    }
    public function quotation(Request $request)
    {

        $request->validate([
            'customer_name' => 'required|string|max:255',
            'customer_contact' => 'required|email',
            'phone' => 'required|string|max:15',
            'equipment_details' => 'required|integer|exists:equipments,id',
            'rental_start_date' => 'required|date|after_or_equal:today',
            'rental_end_date' => 'required|date|after_or_equal:rental_start_date',
        ]);

        $existingItem = Equipment::findOrFail($request->equipment_details);
        if (!$existingItem) {
            return response()->json([
                'isSuccessful' => false,
                'message' => 'Target Equipment not found',
            ]);
        }
        $startDate = Carbon::parse($request->rental_start_date);
        $endDate = Carbon::parse($request->rental_end_date);

        $total_days = $startDate->diffInDays($endDate);

        $total_price = $existingItem->rental_price * $total_days;

        $request->merge([
            "customer_contact" => $request->customer_contact . ',' . $request->phone,
            "rental_duration" => $total_days,
            "status" => "pending",
            "total_price" => $total_price,
            "daily_rate" => $existingItem->rental_price
        ]);

        Quotation::create($request->all());

        return response()->json([
            'isSuccessful' => true,
            'message' => 'Your rental request has been submitted successfully! Our team will contact you shortly.',
        ]);
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
        $equipments = Equipment::all();
        return view('services', compact('equipments'));
    }
}
