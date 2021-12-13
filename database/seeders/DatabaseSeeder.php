<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Model::unguard();
        Schema::disableForeignKeyConstraints();

        $this->call(MunicipiosTableSeeder::class);

        $this->call(LocalidadesTableSeeder::class);

        $this->call(TerremotosTableSeeder::class);

        Model::reguard();

        Schema::enableForeignKeyConstraints();

        self::seedUsers();

    }

    private static function seedUsers() {

        User::truncate();

        $user1 = new User();
        $user1->name = 'joseSanFulgencio';
        $user1->email = '8686470@alu.murciaeduca.es';
        $user1->password = bcrypt('joseSanFulgencio');
        $user1->save();

    }

}
