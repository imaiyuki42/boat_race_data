<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RaceName extends Model
{
    use HasFactory;

    protected $table = 'race_names';
    protected $primaryKey = 'race_name_id';
    protected $fillable = [
        'race_name',
        'race_location_id',
    ];
}
