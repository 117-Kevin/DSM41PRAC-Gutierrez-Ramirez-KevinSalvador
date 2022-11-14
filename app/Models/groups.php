<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\hasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class groups extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'alumno_id'
        ];
    
        public function students() {
            return $this->hasMany(students::class);
    
        }
    use SoftDeletes;    
    
    
}
