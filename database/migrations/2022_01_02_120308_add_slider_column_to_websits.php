<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSliderColumnToWebsits extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('websits', function (Blueprint $table) {
            //
            $table->string('slider_tile')->nullable();
            $table->text('slider_description')->nullable();
            $table->string('service_tile')->nullable();
            $table->text('service_description')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('websits', function (Blueprint $table) {
            //
            $table->dropColumn('slider_tile');
            $table->dropColumn('slider_description');
            $table->dropColumn('service_title');
            $table->dropColumn('service_description');
        });
    }
}
