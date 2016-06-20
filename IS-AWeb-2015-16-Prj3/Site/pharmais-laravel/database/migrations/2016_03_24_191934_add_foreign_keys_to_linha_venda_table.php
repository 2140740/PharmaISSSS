<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLinhaVendaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('linha_venda', function(Blueprint $table)
		{
			$table->foreign('id_medicamento', 'linha_venda_ibfk_6')->references('id')->on('medicamento')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_venda', 'linha_venda_ibfk_5')->references('id')->on('venda')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('linha_venda', function(Blueprint $table)
		{
			$table->dropForeign('linha_venda_ibfk_6');
			$table->dropForeign('linha_venda_ibfk_5');
		});
	}

}
