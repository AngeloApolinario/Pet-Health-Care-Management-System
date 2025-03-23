<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;
    protected $table = 'pets';



    protected $fillable = [
        'user_id',
        'name',
        'breed',
        'age',
        'gender'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function schedules()
    {
        return $this->hasMany(Schedule::class, 'pet_id');
    }
    public function medicalRecords()
    {
        return $this->hasMany(MedicalRecord::class);
    }
}
