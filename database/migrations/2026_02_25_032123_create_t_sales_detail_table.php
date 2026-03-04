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
        Schema::create('t_sales_detail', function (Blueprint $table) {
            $table->id('detail_id');
            $table->unsignedBigInteger('sales_id')->index();
            $table->unsignedBigInteger('barang_id')->index();
            $table->integer('jumlah');
            $table->integer('harga');
            $table->timestamps();

            $table->foreign('sales_id')->references('sales_id')->on('t_sales');
            $table->foreign('barang_id')->references('barang_id')->on('m_barang');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_sales_detail');
    }
};
