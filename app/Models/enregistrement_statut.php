<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class enregistrement_statut extends Model
{
    use HasFactory;
    public function enregistrement() {
        return $this ->hasMany(Enregistrement::class);
    }
}
