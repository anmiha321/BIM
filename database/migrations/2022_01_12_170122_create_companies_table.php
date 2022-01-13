<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained();
            $table->string('title')->nullable();
            $table->bigInteger('INN')->nullable();
            $table->bigInteger('BIK')->nullable();
            $table->string('law_address')->nullable();
            $table->string('mail_address')->nullable();
            $table->string('fact_address')->nullable();
            $table->bigInteger('KPP')->nullable();
            $table->bigInteger('OKPO')->nullable();
            $table->string('tax_system')->nullable();
            $table->bigInteger('OGPH')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('bank_name')->nullable();
            $table->bigInteger('P/C')->nullable();
            $table->bigInteger('K/C')->nullable();
            $table->bigInteger('bank_BIK')->nullable();
            $table->foreignId('manager_id')->nullable()->constrained();
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
        Schema::dropIfExists('companies');
    }

}
