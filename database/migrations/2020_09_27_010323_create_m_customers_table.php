<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_customers', function (Blueprint $table) {
            $table->increments("id");
            $table->string("code", 10)->unique();
            $table->string("name", 50);
            $table->string("name_kana", 50)->nullable();
            $table->string("zip_code", 7)->nullable();
            $table->string("address", 50)->nullable();
            $table->string("building_name", 50)->nullable();
            $table->string("tel", 15)->nullable();
            $table->string("fax", 15)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_customers');
    }
}
