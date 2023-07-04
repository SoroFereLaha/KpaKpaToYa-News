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
        // les differentes colones qu'on aura dans notre table Post
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            //slug doit etre unique car c'est le lien qui permet d'accedder a un article 
            $table->string('slug')->unique();
            //pour l'extrait des articles
            $table->string('extraitArticle');
            $table->text('contenu');
            $table->string('lienImage');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
