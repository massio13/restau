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
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('libelle');
            $table->timestamps();
            $table->unique('libelle');

        });
        Schema::table('plats',function (Blueprint $table) {
            $table  ->foreignIdFor(App\Models\Categorie::class)
                    ->nullable() 
                    ->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('plats',function (Blueprint $table) {
            $table->dropForeignIdFor(App\Models\Categorie::class);
        });
        Schema::dropIfExists('categories');
    }
};
