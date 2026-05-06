<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
public function up(): void
{
    Schema::create('registrations', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->string('nim')->unique();
        $table->string('angkatan');
        $table->text('alasan');
        $table->timestamps();
    });

    Schema::create('aspirations', function (Blueprint $table) {
        $table->id();
        $table->string('subjek');
        $table->text('pesan');
        $table->boolean('is_anonymous')->default(false);
        $table->timestamps();
    });
}
};
