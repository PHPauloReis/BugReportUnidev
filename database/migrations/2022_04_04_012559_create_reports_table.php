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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('title', 255);
            $table->string('product', 100);
            $table->string('version', 50);
            $table->string('module', 100);
            $table->string('operational_system', 50);
            $table->enum('priority', ['p1', 'p2', 'p3', 'p4', 'p5']);
            $table->enum('severity', ['blocker', 'critical', 'major', 'minor', 'trivial', 'enhancement']);
            $table->enum('status', ['new', 'fixed', 'verified', 'reopen', 'wont_fix']);
            $table->string('url', 255)->nullable();
            $table->text('bug_description');
            $table->timestamps();

            $table
                ->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reports');
    }
};
