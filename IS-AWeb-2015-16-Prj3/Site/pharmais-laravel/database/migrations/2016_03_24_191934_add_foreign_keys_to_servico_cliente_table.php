<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToServicoClienteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('servico_cliente', function(Blueprint $table)
		{
			$table->foreign('id_servico', 'servico_cliente_ibfk_8')->references('id')->on('servico')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_cliente', 'servico_cliente_ibfk_7')->references('id')->on('cliente')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('servico_cliente', function(Blueprint $table)
		{
			$table->dropForeign('servico_cliente_ibfk_8');
			$table->dropForeign('servico_cliente_ibfk_7');
		});
	}

}
