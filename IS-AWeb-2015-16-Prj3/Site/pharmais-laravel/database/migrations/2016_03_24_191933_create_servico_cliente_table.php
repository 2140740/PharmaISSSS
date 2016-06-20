<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateServicoClienteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('servico_cliente', function(Blueprint $table)
		{
			$table->integer('id_servico')->unsigned()->index('idServico');
			$table->integer('id_cliente')->unsigned()->index('idCliente');
			$table->primary(['id_servico','id_cliente']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('servico_cliente');
	}

}
