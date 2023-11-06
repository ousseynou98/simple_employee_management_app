<?php

namespace App\Models;

use Filament\Forms\Get;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class City extends Model
{
    use HasFactory;

    protected $fillable = [
        'country_id',
        'name',
    ];

    public function state(): BelongsTo{
        return $this->belongsTo(State::class);
    }

    public function employees(): HasMany{
        return $this->hasMany(Employee::class);
    } 
}
