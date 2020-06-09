<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ContactMetas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_metas', function (Blueprint $table) {
            $table->id();
            $table->integer('author_id');
            $table->string('page_name');
            $table->text('meta_title');
            $table->text('meta_description');
            $table->boolean('index');
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
        Schema::dropIfExists('contact_metas');
    }
}
