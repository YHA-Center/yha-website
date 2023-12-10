<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;

    protected $fillable = [
        "studentID",
        "courseID",
        "sectionID",
        "firstName",
        "lastName",
        "registerDate",
        "enrollDate",
        "endDate",
        "fatherName",
        "motherName",
        "phone",
        "email",
        "city",
        "dateOfBirth",
        "NRC",
        "gender",
        "image",
        "education",
        "status"
    ];
}
