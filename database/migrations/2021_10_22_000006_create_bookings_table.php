<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('apartment_id')->constrained('apartments')->cascadeOnDelete();
            $table->string('code',6);
            $table->timestamp('started_at');
            $table->timestamp('ended_at');
            $table->timestamps();
        });

        Schema::create('booking_guest', function (Blueprint $table) {
            $table->foreignId('booking_id')
                ->constrained('bookings')->cascadeOnDelete();
            $table->foreignId('guest_id')
                ->constrained('guests')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');

        Schema::dropIfExists('booking_guest');
    }
}
