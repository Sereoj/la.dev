<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('city_id')->constrained('cities')->cascadeOnDelete();
            $table->string('name');
            $table->string('description');
            $table->string('cost');
            $table->timestamps();
        });

        Schema::create('apartments_options', function (Blueprint $table) {

            $types = [
              'once',
              'daily',
              'dailyForEach'
            ];

            $table->id();
            $table->foreignId('apartment_id')
                ->constrained('apartments')->cascadeOnDelete();
            $table->string('name',70);
            $table->string('cost',11)->default(0);
            $table->enum('type', $types);
        });

        Schema::create('apartments_photos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('apartment_id')
                ->constrained('apartments')->cascadeOnDelete();
            $table->string('description');
            $table->string('path',100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apartments');
        Schema::dropIfExists('apartments_options');
        Schema::dropIfExists('apartments_photos');
    }
}
