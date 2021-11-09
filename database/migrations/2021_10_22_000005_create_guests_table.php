<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guests', function (Blueprint $table) {
            $types = [
              'м',
              'ж'
            ];

            $table->id();
            $table->string('first_name',50);
            $table->string('last_name',50);
            $table->string('patronymic',50);
            $table->date('birthday');
            $table->string('phone',15);
            $table->enum('gender',$types);
            $table->foreignId('document_type_id')
                ->constrained('document_types')->cascadeOnDelete();
            $table->string('document_number');
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
        Schema::dropIfExists('guests');
    }
}
