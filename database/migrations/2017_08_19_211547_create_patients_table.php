<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('FileNo', 20);   
            $table->smallInteger('InstitutionId');
            $table->string('LastName');
            $table->string('FirstName');
            $table->date('BirthDate');
            $table->char('Gender', 2);
            $table->string('City');
            $table->string('Address');
            $table->string('province');
            $table->string('ZipCode', 50);
            $table->integer('Telephone');
            $table->string('ParentLastName');
            $table->string('ParentFirstName');
            $table->string('PartentRelationship', 50);
            $table->integer('DistanceToCenterKm');
            $table->smallInteger('SiblingsNr');
            $table->string('FathersOccupation');
            $table->string('MothersOccupation');
            $table->integer('AnnualIncome');
            $table->smallInteger('EnteredBy');
            $table->smallInteger('modifiedBy');
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
        Schema::dropIfExists('patients');
    }
}
