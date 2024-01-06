<?php

use App\Helper\helper;
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
        helper::insertOrderProducts();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
