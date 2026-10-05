<?php
namespace Database\Seeders;

use App\Models\Competence;

use Illuminate\Database\Seeder;

class CompetenceSeeder extends Seeder

{

    public function run(): void

    {

        $competences = [

            'php-laravel' => ['nom' => 'PHP / Laravel', 'niveau' => 'Avancé', 'description' => 'Développement web back-end avec Laravel.'],

            'sql'         => ['nom' => 'Bases de données SQL', 'niveau' => 'Intermédiaire', 'description' => 'Conception et requêtes MySQL/MariaDB.'],

            'reseaux'     => ['nom' => 'Administration réseaux', 'niveau' => 'Intermédiaire', 'description' => 'VLAN, routage, sécurité réseau.'],

            'git'         => ['nom' => 'Git / Versioning', 'niveau' => 'Avancé', 'description' => 'Gestion de versions et travail collaboratif.'],

        ];



        foreach ($competences as $slug => $data) {

            Competence::updateOrCreate(['slug' => $slug], $data);

        }

    }

}
