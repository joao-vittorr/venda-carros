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
            $table->string("model",250);
            $table->string("color",250);
            $table->boolean("mult");
            $table->integer("manuf_year");
            $table->integer("mileage");
            $table->float("price");
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
