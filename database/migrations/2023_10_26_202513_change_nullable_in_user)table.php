<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table){
            $table->longText('address_one')->nullable()->change();
            $table->longText('address_two')->nullable()->change();
            $table->integer('provinces')->nullable()->change();
            $table->integer('zip_code')->nullable()->change();
            $table->string('country')->nullable()->change();
            $table->string('phone_number')->nullable()->change();
            $table->string('store_number')->nullable()->change();
            $table->integer('categories_id')->nullable()->change();
            $table->integer('store_status')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table){
            $table->longText('address_one')->nullable(false)->change();
            $table->longText('address_two')->nullable(false)->change();
            $table->integer('provinces')->nullable(false)->change();
            $table->integer('zip_code')->nullable(false)->change();
            $table->string('country')->nullable(false)->change();
            $table->string('phone_number')->nullable(false)->change();
            $table->string('store_number')->nullable(false)->change();
            $table->integer('categories_id')->nullable(false)->change();
            $table->integer('store_status')->nullable(false)->change();
        });
    }
};
