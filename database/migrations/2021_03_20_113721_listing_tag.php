<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ListingTag extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listing_tag', function (Blueprint $table) {

            $table->id();

            $table->unsignedBigInteger('listing_id');
            $table->unsignedBigInteger('tag_id');
            
            $table->foreign('listing_id')->references('id')->on('listings');
            $table->foreign('tag_id')->references('id')->on('tags');

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
        Schema::dropIfExists('listing_tag');
    }
}
