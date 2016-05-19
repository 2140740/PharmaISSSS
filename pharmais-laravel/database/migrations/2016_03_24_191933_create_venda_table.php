<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVendaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('venda', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id_cliente')->unsigned()->index('idCliente');
			$table->date('data_venda');
			$table->decimal('preco_total', 10);
			$table->integer('id_user_registou_venda')->unsigned()->index('idUser');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('venda');
	}

}
