<?php

namespace App\Models;

use App\Models\Translate;
use App\Traits\template\Auditable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Destination extends Model
{
    use HasFactory, Auditable;
    protected $guarded = [];
}
