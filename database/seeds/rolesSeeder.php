<?php

use Illuminate\Database\Seeder;

class rolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
        [   'id' => 1,
            'libelle' => 'Administrateur',
        ],
        [   'id' => 2,
            'libelle' => 'Client',
        ],
        ]);
    }
}
