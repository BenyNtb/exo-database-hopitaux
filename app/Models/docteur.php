<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class docteur extends Model
{
    use HasFactory;
    public function patient()
    {
        return $this->hasMany(Patient::class);
    }
}
