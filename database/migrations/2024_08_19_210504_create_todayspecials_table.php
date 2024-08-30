<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTodayspecialsTable extends Migration
{

    public function up()
    {
        Schema::create('todayspecials', function (Blueprint $table) {
            $table->id();
            $table->string("image");
            $table->string("title_en");
            $table->string("title_ar");
            $table->string("description_en");
            $table->string("description_ar");
            $table->float("price");
            $table->string("parent_id");
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('todayspecials');
    }
}
