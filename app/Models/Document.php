<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Document extends Model
{
    use HasFactory;

    protected $fillable =['crew_id', 'code', 'name', 'number', 'date_issued', 'date_expiry', 'remarks'];

    public function crew() {
        return $this->belongsTo(Crew::class);
    }
}
