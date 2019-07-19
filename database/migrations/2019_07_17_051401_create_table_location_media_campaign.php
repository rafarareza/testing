<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableLocationMediaCampaign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('location_media_campaign', function (Blueprint $table) {
            $table->increments('id');
			
			$table->integer('id_campaign')->unsigned()->index();
			$table->char('id_city')->nullable();
			$table->integer("id_medium")->unsigned()->index();
			$table->float('total')->nullable();
			
			// // // $table->foreign('id_campaign')
				// // // ->references('id')
				// // // ->on('campaign')
				// // // ->onDelete('cascade')
				// // // ->onUpdate('cascade');

			// // // $table->foreign('id_city')
				// // // ->references('id')
				// // // ->on('cities')
				// // // ->onDelete('cascade')
				// // // ->onUpdate('cascade');
			// // // $table->foreign('id_city')
                // // // ->references('id')->on('cities')
                // // // ->onDelete('cascade');

			// // // $table->foreign('id_medium')
				// // // ->references('id')
				// // // ->on('mediums')
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
        Schema::dropIfExists('location_media_campaign');
    }
}
