<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class maladie extends Model
{
    use HasFactory;
    public function enregistrement() {
		return $this->hasMany(Enregistrement::class);
    }
}
