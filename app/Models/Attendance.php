<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    // Attendance.php
protected $fillable = [
    'employee_name', 'date', 'time_in', 'time_out', 'status'
];
}
