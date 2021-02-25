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
        $defaultCredentials = [
            'live_merchant_id' => '10021800',
            'live_merchant_key' => 'pp6kxd4i3urb9',
            'live_passphrase' => 'RandomPassphrase123',
            'test_merchant_id' => '10021800',
            'test_merchant_key' => 'pp6kxd4i3urb9',
            'test_passphrase' => 'SandboxRandomPassphrase123',
            'test_mode_active' => true
        ];

        Payfast::create($defaultCredentials);
    }
}
