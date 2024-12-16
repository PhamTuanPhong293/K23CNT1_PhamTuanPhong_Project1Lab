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
        Schema::create('ptpctdondh', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->string('ptpSoDH');
            $table->string('ptpMaVTu');
            $table->integer('ptpSlDat');
            //khoa chinh
            $table->primary('ptpSoDH','ptpMaVTu');
            //khoa ngoai
            $table->foreign('ptpSoDH')->references('ptpSoDH')->on('ptpdondh');
            $table->foreign('ptpMaVTu')->references('ptpMaVTu')->on('ptpvattu');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ptpctdondh');
    }
};
