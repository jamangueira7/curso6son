<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(191);
        Schema::create('user_accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email',255);
            $table->string('password');
            $table->integer(config('tenant.foreign_key'))->unsigned();
            $table->foreign(config('tenant.foreign_key'))->references('id')->on('accounts');

            $table->rememberToken();
            $table->timestamps();
            $table->unique([DB::raw('email(191)')]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_accounts');
    }
}
