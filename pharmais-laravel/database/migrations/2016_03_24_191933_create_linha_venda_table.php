<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLinhaVendaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('linha_venda', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id_venda')->unsigned()->index('idVenda');
			$table->integer('id_medicamento')->unsigned()->index('idMedicamento');
			$table->integer('qtd');
			$table->decimal('preco_un', 10);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('linha_venda');
	}

}
