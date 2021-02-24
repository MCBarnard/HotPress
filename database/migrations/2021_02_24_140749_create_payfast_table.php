<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePayfastTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payfast', function (Blueprint $table) {
            $table->id();
            $table->string('live_merchant_id');
            $table->string('live_merchant_key');
            $table->string('live_passphrase');
            $table->string('test_merchant_id')->nullable();
            $table->string('test_merchant_key')->nullable();
            $table->string('test_passphrase')->nullable();
            $table->boolean('test_mode_active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payfast');
    }
}
