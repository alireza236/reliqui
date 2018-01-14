<?php

namespace App\Models\Patient;

use Illuminate\Database\Eloquent\Model;

class HealthHistory extends Model
{
    protected $table = 'health_histories';

    protected $fillable = [
        'user_id', 'patient_id', 'doctor_id', 'group_id', 'appointment_date', 'appointment_time',
        'appointment_patient_condition', 'schedule_start_time', 'schedule_end_time', 'schedule_estimated_service_time',
        'schedule_estimated_price_service', 'doctor_diagnosis', 'doctor_action', 'doctor_note',
    ];
}
