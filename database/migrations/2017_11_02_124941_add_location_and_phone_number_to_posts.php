<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLocationAndPhoneNumberToPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts',function($table){
            $table->string('location');
        });

        Schema::table('posts',function($table){
            $table->string('phone_number');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts',function($table){
            $table->dropColumn('location');
        });

        Schema::table('posts',function($table){
            $table->dropColumn('phone_number');
        });
    }
}
