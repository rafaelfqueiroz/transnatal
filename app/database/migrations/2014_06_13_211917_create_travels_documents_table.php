<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTravelsDocumentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('travels_documents', function(Blueprint $t){
			$t->increments('id');
			$t->string('document_number')->nullable();
			$t->string('document_type')->nullable();
			$t->string('document_client_name')->nullable();
			$t->string('document_origin')->nullable();
			$t->string('document_destination')->nullable();
			$t->string('document_service_value')->nullable();
			$t->string('document_cubic_meters')->nullable();
			$t->integer('travel_id')->unsigned();
			$t->foreign('travel_id')->references('id')->on('travels');
			$t->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('travels_documents');
	}

}
