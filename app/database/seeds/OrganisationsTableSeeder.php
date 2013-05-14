<?php

class OrganisationsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('organisations')->delete();
        Organisation::create(array(
                'name' => 'Oxfam',
                'description' => 'Oxfam',
                'url' => 'www.oxfam.org',
                'logo_url' => 'http://www.oxfam.org.uk/_Client/Images/Global/Logo.png',
                'is_bad' => false,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
        )); 
    }
}