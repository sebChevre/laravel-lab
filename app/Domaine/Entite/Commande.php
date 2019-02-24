<?php

namespace App\Domaine\Entite;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    //
    protected $table = 'commandes';

    public $timestamps = false;

    protected $dateFormat = 'U';

    //const CREATED_AT = 'creation_date';
    //const UPDATED_AT = 'last_update';

    protected $fillable = [
        'noCommande'
    ];

    public $noCommande = '';

}
