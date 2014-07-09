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
				$table->timestamps();
				$table->softDeletes();

				$table->text('title')->nullable();
				$table->string('code')->nullable();
				$table->integer('active')->unsigned()->nullable();
				$table->timestamp('start_at');
				$table->timestamp('end_at');
				$table->integer('created_by_user')->unsigned()->nullable();
				$table->integer('updated_by_user')->unsigned()->nullable();
				$table->integer('deleted_by_user')->unsigned()->nullable();


				$table->index('code');
			});
		}
	}

}
