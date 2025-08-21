<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Orgs extends Model
{
    public function Todo(): HasMany
    {
        return $this->hasMany(Todo::class);
    }
}
