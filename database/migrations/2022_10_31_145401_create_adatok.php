<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adatok', function (Blueprint $table) {
            $table->id("a_id");
            $table->string("Vezeteknev",30);
            $table->string("Keresztnev",30);
            $table->date("Szuletesi_ev");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adatok');
    }
};
