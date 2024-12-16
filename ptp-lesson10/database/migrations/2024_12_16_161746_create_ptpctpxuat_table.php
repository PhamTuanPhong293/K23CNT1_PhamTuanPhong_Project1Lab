<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ptpctpxuat', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->string('ptpSoXP');
            $table->string('ptpMaVTu');
            $table->integer('ptpSlXuat');
            $table->float('ptpDgXuat');
            //primary
            $table->primary('ptpSoXP','ptpMaVTu');
            //khoa ngoai
            $table->foreign('ptpSoXP')->references('ptpSoXP')->on('ptppxuat');
            $table->foreign('ptpMaVTu')->references('ptpMaVTu')->on('ptpvattu');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ptpctpxuat');
    }
};
