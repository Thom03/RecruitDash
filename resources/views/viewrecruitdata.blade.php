@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Recruitment Information') }}</div>

                    <div class="card-body">
                        <div class="row">
                            <ul class="list-group">
                                <li class="list-group-item"><strong>RFP No: </strong>{{ $recruitdata->rfp_no }}</li>
                                <li class="list-group-item"><strong>Position name : </strong>{{ $recruitdata->position_name }}</li>
                                <li class="list-group-item"><strong>Region:</strong>{{ $recruitdata->region }}</li>
                                <li class="list-group-item"><strong>Lever:</strong>{{ $recruitdata->lever }}</li>
                                <li class="list-group-item"><strong>Duty Station :</strong>{{ $recruitdata->duty_station }}</li>
                                <li class="list-group-item"><strong>Position Level :</strong>{{ $recruitdata->position_level }}</li>
                                <li class="list-group-item"><strong>Type of position:</strong>{{ $recruitdata->type_of_position }}</li>
                                <li class="list-group-item"><strong>Reason for hire:</strong>{{ $recruitdata->Reason_for_hire }}</li>
                                <li class="list-group-item"><strong>Recruitment Start date:</strong>{{ $recruitdata->recruitment_start_date }}</li>
                                <li class="list-group-item"><strong>Offer acceptance date:</strong>{{ $recruitdata->offer_acceptance_date }}</li>
                                <li class="list-group-item"><strong>Candidate reporting date:</strong>{{ $recruitdata->candidate_reporting_date }}</li>
                                <li class="list-group-item"><strong>Time taken to hire:</strong>{{ $recruitdata->time_taken_to_hire }}</li>
                                <li class="list-group-item"><strong>Candidate name:</strong>{{ $recruitdata->candidate_name }}</li>
                                <li class="list-group-item"><strong>Nationality:</strong>{{ $recruitdata->nationality }}</li>
                                <li class="list-group-item"><strong>Gender :</strong>{{ $recruitdata->gender }}</li>
                                <li class="list-group-item"><strong>RFP initiated date:</strong>{{ $recruitdata->rfp_initiated_date }}</li>
                                <li class="list-group-item"><strong>TOR Revision:</strong>{{ $recruitdata->tor_revision }}</li>
                                <li class="list-group-item"><strong>RFP Approval process(PLANS/LINE MANAGER/TRT):</strong>{{ $recruitdata->rfp_approval_process }}</li>
                                <li class="list-group-item"><strong>WFC:</strong>{{ $recruitdata->wfc }}</li>
                                <li class="list-group-item"><strong>Advertising:</strong>{{ $recruitdata->advertising }}</li>
                                <li class="list-group-item"><strong>Receiving Applications in Zoho:</strong>{{ $recruitdata->receiving_application_in_zoho }}</li>
                                <li class="list-group-item"><strong>Pre-screening Applications (HR):</strong>{{ $recruitdata->pre_screening_applications }}</li>
                                <li class="list-group-item"><strong>Interview stage:</strong>{{ $recruitdata->interview_stage }}</li>
                                <li class="list-group-item"><strong>Reference checks:</strong>{{ $recruitdata->reeference_checks }}</li>
                                <li class="list-group-item"><strong>Submission of documents to Total Reward Team :</strong>{{ $recruitdata->submission_documents_total_reward }}</li>
                                <li class="list-group-item"><strong>Remarks:</strong>{{ $recruitdata->remarks }}</li>

                            </ul>
                            <a href="{{ url('/home') }}" class="card-link">Back</a>

                    </div>

                </div>
            </div>
        </div>
    </div>


@endsection
