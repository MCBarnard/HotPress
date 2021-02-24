<?php

namespace Database\Seeders;

use App\Models\Payfast;
use Illuminate\Database\Seeder;

class PayFastSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $defaultCredentials = ['live_merchant_id' => '10000102',
            'live_merchant_key' => 'awsedrft',
            'live_passphrase' => 'SomeRandomPassphrase',
            'test_merchant_id' => '10000100',
            'test_merchant_key' => 'dcfvgbghhyu',
            'test_passphrase' => 'SandboxRandomPassphrase',
            'test_mode_active' => true
        ];

        Payfast::create($defaultCredentials);
    }
}
