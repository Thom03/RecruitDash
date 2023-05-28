<?php

namespace App\Http\Controllers;

use App\Models\RecruitData;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $recruitdata = RecruitData::all();
        $recruitdata_count = RecruitData::all()->count();


        return view('home', compact('recruitdata', 'recruitdata_count'));
    }

    public function add_recruitdata()
    {


        return view('addrecruitdata');

    }

    public function insert_recruitdata(Request $request)
    {

        // Create the dataset
        $recruitdata = new RecruitData();
        $recruitdata->rfp_no = $request->input('rfp_no');
        $recruitdata->position_name = $request->input('position_name');
        $recruitdata->region = $request->input('region');
        $recruitdata->lever = $request->input('lever');
        $recruitdata->duty_station = $request->input('duty_station');
        $recruitdata->position_level = $request->input('position_level');
        $recruitdata->type_of_position = $request->input('type_of_position');
        $recruitdata->Reason_for_hire = $request->input('Reason_for_hire');
        $recruitdata->recruitment_start_date = $request->input('recruitment_start_date');
        $recruitdata->offer_acceptance_date = $request->input('offer_acceptance_date');
        $recruitdata->candidate_reporting_date = $request->input('candidate_reporting_date');
        $recruitdata->time_taken_to_hire = $request->input('time_taken_to_hire');
        $recruitdata->candidate_name = $request->input('candidate_name');
        $recruitdata->nationality = $request->input('nationality');
        $recruitdata->gender = $request->input('gender');
        $recruitdata->rfp_initiated_date = $request->input('rfp_initiated_date');
        $recruitdata->tor_revision = $request->input('tor_revision');
        $recruitdata->rfp_approval_process = $request->input('rfp_approval_process');
        $recruitdata->wfc = $request->input('wfc');
        $recruitdata->advertising = $request->input('advertising');
        $recruitdata->receiving_application_in_zoho = $request->input('receiving_application_in_zoho');
        $recruitdata->pre_screening_applications = $request->input('pre_screening_applications');
        $recruitdata->interview_stage = $request->input('interview_stage');
        $recruitdata->reeference_checks = $request->input('reeference_checks');
        $recruitdata->submission_documents_total_reward = $request->input('submission_documents_total_reward');
        $recruitdata->remarks = $request->input('remarks');
        $recruitdata->save();

        return redirect('/home')->with('status', 'Recruitment has been added successfully.');

    }

    public function view_recruitdata($id)
    {
        $recruitdata = RecruitData::find($id);

        return view('viewrecruitdata', compact('recruitdata'));

    }

    public function delete_recruitdata($id)
    {
        $recruitData = RecruitData::find($id);

        if (!$recruitData) {
            return redirect('/home')->with('error', 'Recruit Data not found.');
        }


        // Delete the record
        $recruitData->delete();

        return redirect('/home')->with('status', 'Recruit Data has been deleted successfully.');

    }
}
