<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDemografiCampaign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demografi_campaign', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('id_campaign')->unsigned()->index();
			$table->integer('id_demografi')->unsigned()->index();

            // // // $table->foreign('id_campaign')
				// // // ->references('id')
				// // // ->on('campaign')
				// // // ->onDelete('cascade')
				// // // ->onUpdate('cascade');

			// // // $table->foreign('id_demografi')
				// // // ->references('id')
				// // // ->on('demografi')
				// // // ->onDelete('cascade')
				// // // ->onUpdate('cascade');
			
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
        Schema::dropIfExists('demografi_campaign');
    }
}
