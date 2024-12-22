<?php
// filepath: /c:/Users/Arie Prasetyo/Documents/PZN/laravel/BWA/laravelInstallr/baru-univ/database/migrations/2024_12_21_123914_remove_slug_from_registrations_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('registrations', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
    }

    public function down(): void
    {
        Schema::table('registrations', function (Blueprint $table) {
            $table->string('slug')->after('full_name');
        });
    }
};
