<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('descripcion');
            $table->unsignedBigInteger('estado_id');
            $table->timestamps();
        });

        Schema::create('taskstatus', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->timestamps();
        });

        DB::table('taskstatus')->insert([
            ['description' => 'Sin asignar'],
            ['description' => 'En proceso'],
            ['description' => 'Completada']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
        Schema::dropIfExists('taskstatus');
    }
};
