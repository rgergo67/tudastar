<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('locale', 3)->default('hu');
            $table->string('currency_code', 10)->default('HUF');
            $table->string('email')->unique();
            $table->string('billing_name')->nullable();
            $table->string('billing_address')->nullable();
            $table->string('billing_city')->nullable();
            $table->string('billing_tax_number')->nullable();
            $table->string('billing_zip')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('subscription_ends_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->text('available_money')->nullable();
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
        Schema::dropIfExists('users');
    }
}
