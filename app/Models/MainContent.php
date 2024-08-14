<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainContent extends Model
{
    use HasFactory;

    protected $table = "maincontent";
    protected $guarded = [];

    const UPDATED_AT = null;
    const CREATED_AT = null;

}
