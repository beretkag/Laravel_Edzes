<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class edzes extends Model
{
    use HasFactory;
    protected $table = 'edzesek';

    protected $fillable = [
        "date",
        "description",
        "duration",
        "completed"
    ];
}
