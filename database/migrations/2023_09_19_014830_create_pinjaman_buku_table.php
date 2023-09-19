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
        Schema::create('pinjaman_buku', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('member_id');
        $table->unsignedBigInteger('book_id');
        $table->timestamp('borrowed_at')->nullable();
        $table->timestamp('returned_at')->nullable();
        $table->timestamps();

        $table->foreign('member_id')->references('id')->on('members')->onDelete('cascade');
        $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pinjaman_buku');
    }
};
