<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfessionalReferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('pgsql-bolsa_empleo')->create('company_professional', function (Blueprint $table) {
            $table->increments('id');
            //$table->integer('company_id')->unsigned();
            //$table->foreign('company_id')->references('id')->on('companies');
            //$table->integer('professional_id')->unsigned();
            //$table->foreign('professional_id')->references('id')->on('professionals');
            $table->string('state')->default('ACTIVE');
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
        Schema::connection('pgsql-bolsa_empleo')->dropIfExists('company_professional');
    }
}
