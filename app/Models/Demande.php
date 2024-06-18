<?php

namespace App\Models;

use App\Models\Site;
use App\Models\Course;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Demande extends Model
{
    use HasFactory;
    protected $fillable = ['motif', 'destination', 'nbre_passagers','lieu_depart','date_deplacement','date','status','site_id'];


    public function site(){
        return $this->belongsTo(Site::class,'site_id', 'id');
    }
    public function courses(){
        return $this->hasMany(Course::class, 'id_demande');
    }
}
