<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Patrick Jane',
            'email' => 'jane@cbi.com',
            'password' => bcrypt('patrickJane'),
        ]);

        DB::table('users')->insert([
            'name' => 'Teresa Lisbon',
            'email' => 'lisbon@cbi.com',
            'password' => bcrypt('teresaLisbon'),
        ]);
    }
}
