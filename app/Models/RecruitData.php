<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecruitData extends Model
{
    use HasFactory;

    protected $table = 'recruitdata';

    protected $fillable = [
        'rfp_no',
        'position_name',
        'region',
        'lever',
        'duty_station',
        'position_level',
        'type_of_position',
        'Reason_for_hire',
        'recruitment_start_date',
        'offer_acceptance_date',
        'candidate_reporting_date',
        'time_taken_to_hire',
        'candidate_name',
        'nationality',
        'gender',
        'rfp_initiated_date',
        'tor_revision',
        'rfp_approval_process',
        'wfc',
        'advertising',
        'receiving_application_in_zoho',
        'pre_screening_applications',
        'interview_stage',
        'reeference_checks',
        'submission_documents_total_reward',
        'remarks',

    ];
}
