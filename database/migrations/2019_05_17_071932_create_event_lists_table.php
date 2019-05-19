<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // The "Tenant"
        Schema::create('event_lists', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('site_name');
            $table->string('description');

            $table->string('subdomain');
            $table->string('domain');

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
        Schema::dropIfExists('event_lists');
    }
}
