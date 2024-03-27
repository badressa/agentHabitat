<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('rapports', function (Blueprint $table) {
            $table->string('signature_locataire')->nullable();
            $table->string('signature_inspecteur')->nullable();
        });
    }

    public function down()
    {
        Schema::table('rapports', function (Blueprint $table) {
            $table->dropColumn('signature_locataire');
            $table->dropColumn('signature_inspecteur');
        });
    }
};
