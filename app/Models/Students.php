<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Students extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name',
        'email',
        'gpa'
    ];

    protected $primaryKey = 'students_id';
    protected $table = 'students';
}
