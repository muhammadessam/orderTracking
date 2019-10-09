<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCompaniesTags extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies_tags', function (Blueprint $table) {
            $table->primary(['company_id','tag_id']);
            $table->unsignedInteger('company_id');
            $table->unsignedInteger('tag_id');
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
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
        Schema::dropIfExists('table_companies_tags');
    }
}
