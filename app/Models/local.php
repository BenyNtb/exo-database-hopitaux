<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class local extends Model
{
    use HasFactory;
    public function consultations() {
		return $this->hasOne(Consultation::class);
	}
    public function hopital(){
		return $this->belongsTo(Hopital::class, "hopital_id", "id");
	}
    public function type(){
        return $this->belongsTo(Type::class, "type", "id");
    }    
}
