<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Collaborateur;

class Entreprise extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'id',
        'nom',
        'rue',
        'code_postal',
        'ville',
        'numero',
        'email',
    ];
    
    public function collaborateurs(){

        return $this->hasMany(Collaborateur::class, 'entreprise_id', 'id');
    }

}
