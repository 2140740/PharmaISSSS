<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToVendaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('venda', function(Blueprint $table)
		{
			$table->foreign('id_user_registou_venda', 'venda_ibfk_6')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_cliente', 'venda_ibfk_5')->references('id')->on('cliente')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('venda', function(Blueprint $table)
		{
			$table->dropForeign('venda_ibfk_6');
			$table->dropForeign('venda_ibfk_5');
		});
	}

}
