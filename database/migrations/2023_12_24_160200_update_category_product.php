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
        if (!Schema::hasColumn('category_products' , 'category_id')) {
            Schema::table('category_products', function (Blueprint $table) {
                $table->string('category_id')->nullable();
                $table->foreign('category_id')->references('id')->on('categories');
            });
        }

            
}

    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //Schema::dropIfExists('category_products');
    }

};

