<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adverts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("title",250);
            //$table->string("type",250);
            //$table->string("brand",250);
            $table->string("model",250);
            $table->string("color",250);
            $table->string("mult",250);
            $table->string("manuf_year",250);
            $table->string("mileage",250);
            $table->string("price",250);
            $table->string("photo",500);
            $table->text("description");
            $table->foreignId("user_id")->constrained();
            $table->foreignId("type_id")->constrained();
            $table->foreignId("category_id")->constrained();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adverts');
    }
}
