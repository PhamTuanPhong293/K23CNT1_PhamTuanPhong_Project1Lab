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
        Schema::create('ptpctpnhap', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->string('ptpSoPN');
            $table->string('ptpMaVTu');
            $table->integer('ptpSlNhap');
            $table->float('ptpDgNhap');
            //primary
            $table->primary('ptpSoPN','ptpMaVTu');
            //khoa ngoai
            $table->foreign('ptpSoPN')->references('ptpSoPN')->on('ptppnhap');
            $table->foreign('ptpMaVTu')->references('ptpMaVTu')->on('ptpvattu');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ptpctpnhap');
    }
};
