<?php
// filepath: /c:/Users/Arie Prasetyo/Documents/PZN/laravel/BWA/laravelInstallr/baru-univ/database/migrations/2024_12_21_081337_add_slug_to_articles_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->string('slug');
        });
    }

    public function down(): void
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
    }
};
