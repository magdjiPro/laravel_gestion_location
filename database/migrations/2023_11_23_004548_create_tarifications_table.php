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
        Schema::create('tarifications', function (Blueprint $table) {
            $table->id();
            $table->double('prix');
            $table->foreignId('duree_location_id')->constrained('duree_locations');
            $table->foreignId('article_id')->constrained();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();//activation de contrait definit au dessus
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tarifications', function (Blueprint $table) {
            $table->dropForeign(['duree_location_id', 'article_id']);
        });
        /*
            avant de faire la suppression de la table tarification,
             il faut delete d'abord les relations entre les tables.
        */
        Schema::dropIfExists('tarifications');
    }
};
