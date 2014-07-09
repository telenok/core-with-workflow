<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWorkflowProcessTable extends Migration {

	public function up()
	{
		if (!Schema::hasTable('workflow_process'))
		{
			Schema::create('workflow_process', function(Blueprint $table)
			{
				$table->increments('id');
				$table->timestamps();
				$table->softDeletes();
				$table->text('title')->nullable();
				$table->mediumText('process')->nullable();
				$table->integer('active')->unsigned()->nullable();
				$table->timestamp('start_at');
				$table->timestamp('end_at');
				$table->integer('thread')->unsigned()->nullable();
				$table->integer('event_resource')->unsigned()->nullable();
				$table->integer('created_by_user')->unsigned()->nullable();
				$table->integer('updated_by_user')->unsigned()->nullable();
				$table->integer('deleted_by_user')->unsigned()->nullable();
			});
		}
	}

}
