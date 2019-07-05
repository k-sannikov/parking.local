<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'state_number', 'place', 'full_name', 'passport_series', 'passport_number',
    ];

    /**
     * Должность на русском языке
     */
    public function getAmountAttribute()
    {
        $hours = Carbon::now()->diffInHours($this->created_at);

        if ($hours < 1) {
            $amount = 50;
        }

        if ($hours >= 1) {
            $amount = $hours * 50;
        } elseif ($hours >= 5) {
            $amount = $hours * 40;
        } elseif ($hours >= 24) {
            $amount = $hours * 25;
        }

        return $amount;
    }
}
