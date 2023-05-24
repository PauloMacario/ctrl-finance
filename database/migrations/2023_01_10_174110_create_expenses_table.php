<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('type_id')->constrained();
            $table->foreignId('segment_id')->constrained();
            $table->string('description', 100)
                ->comment('Descrição resumida da despesa');
            $table->string('observation', 255)
                ->comment('Alguma observação importante');
            $table->date('date');
            $table->enum('has_installment', ['Y', 'N'])
                ->default('Y')
                ->comment('Se existe ou não parcelas para determinada despesa.');
            $table->date('due_date');
            $table->decimal('total_value', 10, 2);
            $table->enum('paid', ['Y', 'N'])
                ->default('N')
                ->comment('Se despesa foi paga.');
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
        Schema::dropIfExists('expenses');
    }
}
