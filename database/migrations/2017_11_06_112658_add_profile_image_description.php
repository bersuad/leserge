<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProfileImageDescription extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('profile_pictures',function($table){
            $table->string('profile_pic');
        });

        Schema::table('profile_pictures',function($table){
            $table->string('profile_discription');
        });

        Schema::table('profile_pictures',function($table){
            $table->string('type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('profile_pictures',function($table){
            $table->dropColumn('profile_pic');
        });

        Schema::table('profile_pictures',function($table){
            $table->dropColumn('profile_discription');
        });

        Schema::table('profile_pictures',function($table){
            $table->dropColumn('type');
        });
    }
}
