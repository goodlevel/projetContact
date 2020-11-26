<?php
use Illuminate\Database\Seeder;

use App\Contact;

class contactTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker\Factory::create('fr_FR');

        for ($i = 0; $i < 20; $i++) {

            $contact = new Contact;

            $contact->contact_civilite = $faker->randomElement(["Madame", "Monsieur"]);
            $contact->contact_prenom = $faker->firstName;
            $contact->contact_nom = $faker->lastName;
            $contact->contact_tel = $faker->phoneNumber;
            $contact->contact_email = $faker->unique()->email;
            $contact->contact_fonction = $faker->jobTitle;
            $contact->contact_service = $faker->realText(12);
            $contact->contact_date_naissance = $faker->dateTimeThisCentury->format('Y-m-d');
            $contact->contact_nom_societe = $faker->company;
            $contact->contact_adresse_societe = $faker->address;
            $contact->contact_code_postale_societe = $faker->postcode;
            $contact->contact_ville_societe = $faker->city;
            $contact->contact_tel_societe = $faker->phoneNumber;
            $contact->contact_site_web_societe = $faker->domainName;

            $contact->save();

        }
    }
}