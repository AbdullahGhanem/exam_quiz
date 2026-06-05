<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * A subject is "locked" until this timestamp. NULL means always available.
     * This lets a finished course be hidden now and re-open automatically on a
     * given date without any manual toggle.
     */
    public function up(): void
    {
        Schema::table('subjects', function (Blueprint $table) {
            $table->timestamp('available_from')->nullable()->after('name');
        });
    }

    public function down(): void
    {
        Schema::table('subjects', function (Blueprint $table) {
            $table->dropColumn('available_from');
        });
    }
};
