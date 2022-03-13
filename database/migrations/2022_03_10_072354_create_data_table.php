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
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            $table->String('name');
            $table->enum('gender',['male','female']);
            $table->integer('phone');
            $table->String('father_name');
            $table->String('mother_name');
            $table->date('birthday');
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
        Schema::dropIfExists('data');
        Schema::dropColumns('name');
        Schema::dropColumns('gender');
        Schema::dropColumns('phone');
        Schema::dropColumns('father_name');
        Schema::dropColumns('mother_name');
        Schema::dropColumns('birthday');


    }
};
