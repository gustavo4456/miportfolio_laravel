<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('educacions', function (Blueprint $table) {
            $table->bigInteger('persona_id')->unsigned();
            $table
                ->foreign('persona_id')
                ->references('id')
                ->on('personas')
                ->after('descripcion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('educacions', function (Blueprint $table) {
            //
        });
    }
};
