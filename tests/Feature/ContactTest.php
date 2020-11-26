<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Contact;

class ContactTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testContactStoreValid(){

        $data = [
            'contact_civilite' => 'contact civilite',
            'contact_prenom' => 'Test prenom',
            'contact_nom' => 'Test nom',
            'contact_tel' => '06 10 20 30 40',
            'contact_email' => 'Test Email',
            'contact_fonction' => 'Test fonction',
            'contact_service' => 'Test service',
            'contact_date_naissance' => 'Test date naissance',
            'contact_nom_societe' => 'Test nom societe',
            'contact_adresse_societe' => 'Test Adresse Societe',
            'contact_code_postale_societe' => 'Test Code postale',
            'contact_ville_societe' => 'Test Ville societe',
            'contact_tel_societe' => '05 24 11 99 12',
            'contact_site_web_societe' => 'Test website',

        ];

        $this->post('/saveContact',$data)
             ->assertStatus(302)
             ->assertSessionHas('status');

        $this->assertEquals(session('status'),'Contact crée');     


    }

    public function testContactDelete(){

        $contact = new Contact();

        $contact->contact_civilite = 'contact civilite';
        $contact->contact_prenom = 'Test prenom';
        $contact->contact_nom = 'Test nom';
        $contact->contact_tel = '06 10 20 30 40';
        $contact->contact_email = 'Test Email';
        $contact->contact_fonction = 'Test fonction';
        $contact->contact_service = 'Test service';
        $contact->contact_date_naissance = 'Test date naissance';
        $contact->contact_nom_societe = 'Test nom societe';
        $contact->contact_adresse_societe = 'Test Adresse Societe';
        $contact->contact_code_postale_societe = 'Test Code postale';
        $contact->contact_ville_societe = 'Test Ville societe';
        $contact->contact_tel_societe = '05 24 11 99 12';
        $contact->contact_site_web_societe = 'Test website';

        $contact->save();

        $this->assertDatabaseHas('contacts',$contact->toArray());

        $this->delete("/deleteContact/{$contact->contact_id}")
             ->assertStatus(302)
             ->assertSessionHas('status');

             $this->assertDatabaseMissing('contacts',$contact->toArray()); 

    }
}
