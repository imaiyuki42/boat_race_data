<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RaceResult extends Model
{
    use HasFactory;

    protected $table = 'race_results';
    protected $primaryKey = 'race_results_id';
    protected $fillable = [
        'race_date',
        'race_number',
        'race_location_id',
        'exacta_first',
        'exacta_second',
        'exacta_refund_price',
        'exacta_rank',
        'trifecta_first',
        'trifecta_second',
        'trifecta_third',
        'trifecta_refund_price',
        'trifecta_rank',
    ];
}
