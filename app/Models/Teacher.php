<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = ['name', 'age', 'address', 'gender', 'phoneNumber', 'email', 'birth_date', 'description', 'religion'];
}
