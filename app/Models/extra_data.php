<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class extra_data extends Model
{
    use HasFactory;
    protected $table="extra_data";
    protected $primaryKey = "id";
}
