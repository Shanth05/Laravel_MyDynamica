<?php

namespace App\Models;
use App\Models\Grade;
use App\Models\Subject;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public function subjects()
    {
        return $this->belongsToMany(Subject::class);
    }

        public function grade()
    {
        return $this->belongsTo(Grade::class);
    }
}
