<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Entreprise;

class Collaborateur extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'id',
        'civilite',
        'nom',
        'prenom',
        'rue',
        'code_postal',
        'ville',
        'numero',
        'email',
        'entreprise_id'
    ];

    public function entreprise()
    {
        return $this->belongsTo(Entreprise::class);
    }
}
