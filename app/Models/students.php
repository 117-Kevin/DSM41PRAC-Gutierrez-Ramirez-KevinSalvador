<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class students extends Model
{
    use HasFactory;
    use SoftDeletes;
    //relacion uno a muchos 

    protected $fillable = [
        'name',
        'sexo',
        'edad',
        'direccion',
        'telefono',
        'subject_id',
        ];
    
    public function groups() {
        return $this->belongsTo(groups::class);
    
        }
    
    public function subjects() {
        return $this->hasMany(subjects::class);
    
        }
        use SoftDeletes;  
}
