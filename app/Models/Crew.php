<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Crew extends Model
{
    use HasFactory;

    protected $fillable =['firstname', 'middlename', 'lastname', 'email', 'address', 'education', 'phone'];

    public function documents(): HasMany
    {
        return $this->hasMany(Document::class);
    }
}
