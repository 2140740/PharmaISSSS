<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMedicamentoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('medicamento', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nome', 128);
			$table->string('nome_generico', 128)->nullable();
			$table->boolean('generico', 1);
			$table->decimal('preco', 10);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('medicamento');
	}

}
