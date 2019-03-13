<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->increments('id');
            $table->string('match_name', 20);
            $table->string('referee', 30);
            $table->unsignedInteger('group_id');
            $table->unsignedInteger('hometeam_id');
            $table->unsignedInteger('awayteam_id');
            $table->unsignedInteger('homescore');
            $table->unsignedInteger('awayscore');
            $table->time('matchstart');
            $table->string('notes', 200);
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
        Schema::dropIfExists('matches');
    }
}
