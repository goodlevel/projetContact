<?php

namespace App;
use Eloquent;

use Illuminate\Notifications\Notifiable;


class Contact extends Eloquent {

    public $timestamps = false;
    protected $primaryKey = 'contact_id';
    protected $table = 'contact';
    protected $fillable = [ 'contact_id','contact_civilite','contact_prenom', 'contact_nom', 'contact_tel', 'contact_email', 
        'contact_fonction', 'contact_service' ,'contact_date_naissance', 'contact_nom_societe','contact_adresse_societe','contact_code_postale_societe',
         'contact_ville_societe','contact_tel_societe','contact_site_web_societe']; 

}
