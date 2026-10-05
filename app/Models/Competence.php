<?php

// app/Models/Competence.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Competence extends Model

{

    protected $fillable = ['slug', 'nom', 'niveau', 'description'];

    // Permet d'utiliser le slug dans les URL au lieu de l'id

    public function getRouteKeyName(): string

    {

        return 'slug';

    }

}
