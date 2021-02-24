<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payfast extends Model
{
    protected $table = 'payfast';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'live_merchant_id',
        'live_merchant_key',
        'live_passphrase',
        'test_merchant_id',
        'test_merchant_key',
        'test_passphrase'
    ];
}
