<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'temp_students';

    // Ensure full_name is included in array and JSON output
    protected $appends = ['full_name', 'city'];

    protected $fillable = [
        'name',
        'email',
        'age', // stores year
        'address',
        'phone',
        'course',
        'enrollment_date',
    ];

    protected $casts = [
        'age' => 'integer',
        'enrollment_date' => 'date',
    ];

    /**
     * Set the age attribute as years old from birthdate.
     * Accepts birthdate (Y-m-d) and stores age in years.
     */
    public function setAgeAttribute($value)
    {
        if ($value) {
            try {
                $birthDate = new \DateTime($value);
                $today = new \DateTime();
                $age = $today->diff($birthDate)->y;
                $this->attributes['age'] = $age;
            } catch (\Exception $e) {
                $this->attributes['age'] = null;
            }
        } else {
            $this->attributes['age'] = null;
        }
    }
    /**
     * Get enrollment date as human readable difference.
     */
    public function getEnrollmentDateAttribute($value)
    {
        if ($value) {
            $date = \Carbon\Carbon::parse($value);
            return $date->diffForHumans(null, true) . ' ago';
        }
        return null;
    }
    /**
     * Get the student's full name using name and email.
     */
    public function getFullNameAttribute()
    {
        return $this->name . ' ' . $this->email;
    }
    public function getCityAttribute()
    {
        return 'Botad';
    }
}
