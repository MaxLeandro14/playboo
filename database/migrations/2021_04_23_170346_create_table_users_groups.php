<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableUsersGroups extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_groups', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('perfil');//ativo, excluido, pendente
            $table->tinyInteger('master');
            $table->string('metas');
            $table->string('onboarding');
            $table->integer('id_user')->nullable();
            $table->foreign('id_user')->references('id')->on('users');
            $table->integer('id_group')->nullable();
            $table->foreign('id_group')->references('id')->on('groups');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_groups');
    }
}
