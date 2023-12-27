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
        if (!Schema::hasColumn('category_products' , 'product_id')) {
            Schema::table('category_products', function (Blueprint $table) {
                $table->string('product_id')->nullable();
                $table->foreign('product_id')->references('id')->on('products');
            });
}
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
