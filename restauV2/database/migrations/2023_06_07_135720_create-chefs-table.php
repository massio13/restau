<?php

use GuzzleHttp\Promise\Create;
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
       Schema::create('chefs', function(Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('nom');
                $table->string('prenom');
                $table->string('photo');
                $table->timestamps();
       });
       Schema::create('plat_chef', function(Blueprint $table) {
                $table->foreignIdFor(\App\Models\Plat::class)->constrained()->cascadeOnDelete();
                $table->foreignIdFor(\App\Models\Chef::class)->constrained()->cascadeOnDelete();
                $table->primary(['plat_id','chef_id']);

       });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plat_chef');
        Schema::dropIfExists('chefs');
    }
};
