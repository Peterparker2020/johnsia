<?php

use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Moymoy',
                'address' => 'Cabulijan',
                'phone' => '09198669918',
                'capitalization' => 30000,
                'loan' => 10000
            ],
            [
                'name' => 'Tejay',
                'address' => 'Los Angeles',
                'phone' => '09501250480',
                'capitalization' => 50000,
                'loan' => 300000
            ],
            [
                'name' => 'Glicerio',
                'address' => 'Cebu City',
                'phone' => '09097982845',
                'capitalization' => 50000,
                'loan' => 200000
            ],
        ];

        foreach($data as $client) {
            \App\Client::create($client);
        }
    }
}
