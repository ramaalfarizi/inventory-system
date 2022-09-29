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
        Schema::create('incoming_items', function (Blueprint $table) {
            $table->id();
            $table->string('item_code');
            $table->date('entry_date');
            $table->string('item_name');
            $table->enum('type', ['surat', 'paket']);
            $table->bigInteger('sender_phone');
            $table->string('image');
            $table->bigInteger('count');
            $table->string('sender');
            $table->string('receiver');
            $table->text('description');
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
        Schema::dropIfExists('incoming_items');
    }
};
