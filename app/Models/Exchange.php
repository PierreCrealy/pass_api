<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Exchange extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'access',
        'login',
        'password',
    ];

    public function histories(): HasMany
    {
        return $this->hasMany(History::class);
    }
}
