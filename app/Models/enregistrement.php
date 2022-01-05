<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class enregistrement extends Model
{
    use HasFactory;
    public function patients() {
    return $this->belongsTo(Patient::class, "patient_id", "enregistrement_id");
    }
    public function consultation() {
    return $this->belongsTo(Consultation::class, "consultation_id", "id");
    }
}
