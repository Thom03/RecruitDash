
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Add Recruit Data') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('insert_recruitdata') }}">
                            @csrf
                            @method('POST')
                            <div class="row">
                            <div class="col-lg-6 mb-2">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('RFP Number') }}</label>

                                    <input id="rfp_no" type="text" class="form-control @error('rfp_no') is-invalid @enderror" name="rfp_no" placeholder="RFP Number" value="{{ old('rfp_no') }}"  autocomplete="rfp_no" autofocus>

                            </div>
                            <div class="col-lg-6 mb-2">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Position Name') }}</label>

                                    <input id="position_name" type="text" class="form-control @error('position_name') is-invalid @enderror" name="position_name" value="{{ old('position_name') }}"  autocomplete="position_name" autofocus>

                            </div>
                                <div class="col-lg-6 mb-2">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Region') }}</label>

                                    <input id="region" type="text" class="form-control @error('region') is-invalid @enderror" name="region" value="{{ old('region') }}"  autocomplete="region" autofocus>

                            </div>
                                <div class="col-lg-6 mb-2">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Lever') }}</label>

                                    <input id="lever" type="text" class="form-control @error('lever') is-invalid @enderror" name="lever" value="{{ old('lever') }}"  autocomplete="lever" autofocus>

                            </div>
                                <div class="col-lg-6 mb-2">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Duty Station') }}</label>

                                    <input id="duty_station" type="text" class="form-control @error('duty_station') is-invalid @enderror" name="duty_station" value="{{ old('duty_station') }}"  autocomplete="duty_station" autofocus>

                            </div>
                                <div class="col-lg-6 mb-2">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Position Level') }}</label>

                                    <input id="position_level" type="text" class="form-control @error('position_level') is-invalid @enderror" name="position_level" value="{{ old('position_level') }}"  autocomplete="position_level" autofocus>

                            </div>
                                <div class="col-lg-6 mb-2">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Type of Position') }}</label>

                                    <input id="type_of_position" type="text" class="form-control @error('type_of_position') is-invalid @enderror" name="name" value="{{ old('type_of_position') }}"  autocomplete="type_of_position" autofocus>

                            </div>
                                <div class="col-lg-6 mb-2">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Reason For Hire') }}</label>

                                    <input id="Reason_for_hire" type="text" class="form-control @error('Reason_for_hire') is-invalid @enderror" name="Reason_for_hire" value="{{ old('Reason_for_hire') }}"  autocomplete="Reason_for_hire" autofocus>

                            </div>
                                <div class="col-lg-6 mb-2">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Recruitment Start date') }}</label>

                                    <input id="recruitment_start_date" type="text" class="form-control @error('recruitment_start_date') is-invalid @enderror" name="recruitment_start_date" value="{{ old('recruitment_start_date') }}"  autocomplete="recruitment_start_date" autofocus>

                            </div>
                                <div class="col-lg-6 mb-2">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Offer Acceptance Date') }}</label>

                                    <input id="offer_acceptance_date" type="text" class="form-control @error('offer_acceptance_date') is-invalid @enderror" name="offer_acceptance_date" value="{{ old('offer_acceptance_date') }}"  autocomplete="offer_acceptance_date" autofocus>

                            </div>
                                <div class="col-lg-6 mb-2">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Candidate Reporting Date') }}</label>

                                    <input id="candidate_reporting_date" type="text" class="form-control @error('candidate_reporting_date') is-invalid @enderror" name="candidate_reporting_date" value="{{ old('candidate_reporting_date') }}"  autocomplete="candidate_reporting_date" autofocus>

                            </div>
                                <div class="col-lg-6 mb-2">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Time Taken To Hire') }}</label>

                                    <input id="time_taken_to_hire" type="text" class="form-control @error('time_taken_to_hire') is-invalid @enderror" name="time_taken_to_hire" value="{{ old('time_taken_to_hire') }}"  autocomplete="time_taken_to_hire" autofocus>

                            </div>
                                <div class="col-lg-6 mb-2">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Candidate Name') }}</label>

                                    <input id="candidate_name" type="text" class="form-control @error('candidate_name') is-invalid @enderror" name="candidate_name" value="{{ old('candidate_name') }}"  autocomplete="candidate_name" autofocus>

                            </div>

                                <div class="col-lg-6 mb-2">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nationality') }}</label>

                                    <input id="nationality" type="text" class="form-control @error('nationality') is-invalid @enderror" name="nationality" value="{{ old('nationality') }}"  autocomplete="nationality" autofocus>

                            </div>

                                <div class="col-lg-6 mb-2">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Gender') }}</label>

                                    <input id="gender" type="text" class="form-control @error('gender') is-invalid @enderror" name="gender" value="{{ old('gender') }}"  autocomplete="gender" autofocus>

                            </div>

                                <div class="col-lg-6 mb-2">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('RFP Initiated Date') }}</label>

                                    <input id="rfp_initiated_date" type="text" class="form-control @error('rfp_initiated_date') is-invalid @enderror" name="rfp_initiated_date" value="{{ old('rfp_initiated_date') }}"  autocomplete="rfp_initiated_date" autofocus>

                            </div>

                            </div>

                            <div class="row">

                                <div class="col-lg-12 mb-2">
                                    <div class="card-header">
                                        <h4 class="card-title">Recruitment Steps</h4>
                                    </div>
                                </div>


                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('TOR Revision') }}</label>
                                <div class="col-md-6">
                                    <input id="tor_revision" type="text" class="form-control @error('tor_revision') is-invalid @enderror" name="tor_revision" value="{{ old('tor_revision') }}"  autocomplete="tor_revision" autofocus>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('RFP Approval process(PLANS/LINE MANAGER/TRT)') }}</label>
                                <div class="col-md-6">
                                    <input id="rfp_approval_process" type="text" class="form-control @error('rfp_approval_process') is-invalid @enderror" name="rfp_approval_process" value="{{ old('rfp_approval_process') }}"  autocomplete="rfp_approval_process" autofocus>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('WFC') }}</label>
                                <div class="col-md-6">
                                    <input id="wfc" type="text" class="form-control @error('wfc') is-invalid @enderror" name="wfc" value="{{ old('wfc') }}"  autocomplete="wfc" autofocus>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Advertising') }}</label>
                                <div class="col-md-6">
                                    <input id="advertising" type="text" class="form-control @error('advertising') is-invalid @enderror" name="advertising" value="{{ old('advertising') }}"  autocomplete="advertising" autofocus>
                                </div>
                            </div>

{{--                            <div class="row mb-3">--}}
{{--                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Advertising') }}</label>--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>--}}
{{--                                </div>--}}
{{--                            </div>--}}


                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Receiving Applications in Zoho') }}</label>
                                <div class="col-md-6">
                                    <input id="receiving_application_in_zoho" type="text" class="form-control @error('receiving_application_in_zoho') is-invalid @enderror" name="receiving_application_in_zoho" value="{{ old('receiving_application_in_zoho') }}"  autocomplete="receiving_application_in_zoho" autofocus>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Pre-screening Applications (HR)') }}</label>
                                <div class="col-md-6">
                                    <input id="pre_screening_applications" type="text" class="form-control @error('pre_screening_applications') is-invalid @enderror" name="pre_screening_applications" value="{{ old('pre_screening_applications') }}"  autocomplete="pre_screening_applications" autofocus>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Interview stage') }}</label>
                                <div class="col-md-6">
                                    <input id="interview_stage" type="text" class="form-control @error('interview_stage') is-invalid @enderror" name="interview_stage" value="{{ old('interview_stage') }}"  autocomplete="interview_stage" autofocus>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Reference Checks') }}</label>
                                <div class="col-md-6">
                                    <input id="reeference_checks" type="text" class="form-control @error('reeference_checks') is-invalid @enderror" name="reeference_checks" value="{{ old('reeference_checks') }}"  autocomplete="reeference_checks" autofocus>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Submission of documents to Total Reward Team') }}</label>
                                <div class="col-md-6">
                                    <input id="submission_documents_total_reward" type="text" class="form-control @error('submission_documents_total_reward') is-invalid @enderror" name="submission_documents_total_reward" value="{{ old('submission_documents_total_reward') }}"  autocomplete="submission_documents_total_reward" autofocus>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Remarks') }}</label>
                                <div class="col-md-6">
                                    <input id="remarks" type="text" class="form-control @error('remarks') is-invalid @enderror" name="remarks" value="{{ old('remarks') }}"  autocomplete="remarks" autofocus>
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Add Recruit Data') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
