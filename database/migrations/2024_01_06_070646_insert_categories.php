<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Helper\helper;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        helper::insertCategories();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
