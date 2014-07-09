<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObjectTabTable extends Migration {

	public function up()
	{
		if (!Schema::hasTable('object_tab'))
		{
			Schema::create('object_tab', function(Blueprint $table)
			{
				$table->increments('id');
				$table->timestamps();
				$table->softDeletes();
				$table->text('title')->nullable();
				$table->string('code')->nullable();
				$table->integer('active')->unsigned()->nullable();
				$table->timestamp('start_at');
				$table->timestamp('end_at');
				$table->integer('tab_order')->unsigned()->nullable();
				$table->integer('tab_object_type')->unsigned()->nullable();
				$table->string('icon_class')->nullable();
				$table->integer('created_by_user')->unsigned()->nullable();
				$table->integer('updated_by_user')->unsigned()->nullable();
				$table->integer('deleted_by_user')->unsigned()->nullable();
			});
		}
	}

}
