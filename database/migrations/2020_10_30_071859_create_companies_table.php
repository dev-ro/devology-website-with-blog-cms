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
            $table->string('company_name')->nullable();
            $table->string('tagline')->nullable();
            $table->text('company_logo_header')->nullable();
            $table->text('company_logo_footer')->nullable();
            $table->text('company_favicon')->nullable();
            $table->text('company_description')->nullable();
            $table->text('company_address')->nullable();
            $table->text('company_contact')->nullable();
            $table->text('company_email')->nullable();
            $table->json('company_social')->nullable();
            $table->string('copyright')->nullable();
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
