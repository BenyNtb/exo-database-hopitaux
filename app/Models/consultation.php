<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class consultation extends Model
{
    use HasFactory;
    public function local(){
    return $this->belongsTo(Local::class, "local_id", "id");
    }
    public function docteur() {
    return $this->belongsTo(Patient::class, "docteur_id", "id");
    }
    public function patient() {
    return $this->belongsTo(Patient::class, "patient_id", "numeroderegistrenational");
    }
    public function enregistrement() {
        return $this->belongsTo(Enregistrement::class, "enregistrement_id", "id");
    }
}