<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFkKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function(Blueprint $table) {
            $table->foreign('role_id')->references('id')->on('roles')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
        Schema::table('produits', function(Blueprint $table) {
            $table->foreign('categorie_id')->references('id')->on('categories')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
        Schema::table('commandes', function(Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
        Schema::table('produit_commande', function(Blueprint $table) {
            $table->foreign('produit_id')->references('id')->on('produits')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
        Schema::table('produit_commande', function(Blueprint $table) {
            $table->foreign('commande_id')->references('id')->on('commandes')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
        Schema::table('favoris', function(Blueprint $table) {
            $table->foreign('produit_id')->references('id')->on('produits')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
        Schema::table('favoris', function(Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fk_keys');
    }
}
