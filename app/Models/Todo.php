<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Todo extends Model
{
    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

        public function personInCharge(): BelongsTo
    {
        return $this->belongsTo(User::class, 'pic');
    }

        public function Projects(): BelongsTo
    {
        return $this->belongsTo(Project::class,'project_id');
    }

        public function Orgs(): BelongsTo
    {
        return $this->belongsTo(Orgs::class, 'orgs_id');
    }    
}
