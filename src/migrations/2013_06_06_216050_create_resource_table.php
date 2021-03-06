<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateResourceTable extends Migration {

	public function up()
	{
		if (!Schema::hasTable('resource'))
		{
			Schema::create('resource', function(Blueprint $table)
			{
				$table->increments('id');
				$table->nullableTimestamps();
				$table->softDeletes();

				$table->text('title')->nullable();
				$table->string('code')->nullable();
				$table->integer('active')->unsigned()->nullable();
				$table->timestamp('active_at_start')->nullable();
				$table->timestamp('active_at_end')->nullable();
				$table->timestamp('locked_at')->nullable();
				$table->integer('created_by_user')->unsigned()->nullable();
				$table->integer('updated_by_user')->unsigned()->nullable();
				$table->integer('deleted_by_user')->unsigned()->nullable()->default(null);
				$table->integer('locked_by_user')->unsigned()->nullable()->default(null); 

				$table->index('code');
			});
		}
	}

}
