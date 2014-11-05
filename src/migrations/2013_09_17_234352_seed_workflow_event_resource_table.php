<?php

use Illuminate\Database\Migrations\Migration;

class SeedWorkflowEventResourceTable extends Migration {

	public function up()
	{
		if (Schema::hasTable('workflow_event_resource'))
		{
			$modelWERId = DB::table('object_type')->where('code', 'workflow_event_resource')->pluck('id');
 
			$tabMainId = DB::table('object_tab')->insertGetId(
					[
						'id' => DB::table('object_sequence')->insertGetId(['id' => null, 'class_model' => '\Telenok\Core\Model\Object\Tab']),
						'title' => json_encode(['en' => 'Main', 'ru' => 'Основное'], JSON_UNESCAPED_UNICODE),
						'code' => 'main',
						'active' => 1,
						'tab_object_type' => $modelWERId,
						'tab_order' => 1
					]
			);

			$tabVisibleId = DB::table('object_tab')->insertGetId(
					[
						'id' => DB::table('object_sequence')->insertGetId(['id' => null, 'class_model' => '\Telenok\Core\Model\Object\Tab']),
						'title' => json_encode(['en' => 'Visibility', 'ru' => 'Видимость'], JSON_UNESCAPED_UNICODE),
						'code' => 'visibility',
						'active' => 1,
						'tab_object_type' => $modelWERId,
						'tab_order' => 2
					]
			);

			$tabAdditionallyId = DB::table('object_tab')->insertGetId(
					[
						'id' => DB::table('object_sequence')->insertGetId(['id' => null, 'class_model' => '\Telenok\Core\Model\Object\Tab']),
						'title' => json_encode(['en' => 'Additionally', 'ru' => 'Дополнительно'], JSON_UNESCAPED_UNICODE),
						'code' => 'additionally',
						'active' => 1,
						'tab_object_type' => $modelWERId,
						'tab_order' => 3
					]
			); 
			
			DB::table('object_field')->insertGetId(
					[
						'id' => DB::table('object_sequence')->insertGetId(['id' => null, 'class_model' => '\Telenok\Core\Model\Object\Field']),
						'title' => json_encode(['ru' => "№", 'en' => "№"], JSON_UNESCAPED_UNICODE),
						'title_list' => json_encode(['ru' => "№", 'en' => "№"], JSON_UNESCAPED_UNICODE),
						'key' => 'integer-unsigned',
						'code' => 'id',
						'active' => 1,
						'field_object_type' => $modelWERId,
						'field_object_tab' => $tabMainId,
						'multilanguage' => 0,
						'show_in_form' => 1,
						'show_in_list' => 1,
						'allow_search' => 1,
						'allow_create' => 0,
						'allow_update' => 0,
						'field_order' => 1,
					]
			);

			DB::table('object_field')->insertGetId(
					[
						'id' => DB::table('object_sequence')->insertGetId(['id' => null, 'class_model' => '\Telenok\Core\Model\Object\Field']),
						'title' => json_encode(['ru' => "Заголовок", 'en' => "Title"], JSON_UNESCAPED_UNICODE),
						'title_list' => json_encode(['ru' => "Заголовок", 'en' => "Title"], JSON_UNESCAPED_UNICODE),
						'key' => 'string',
						'code' => 'title',
						'active' => 1,
						'field_object_type' => $modelWERId,
						'field_object_tab' => $tabMainId,
						'multilanguage' => 0,
						'show_in_form' => 1,
						'show_in_list' => 1,
						'allow_search' => 1,
						'required' => 1,
						'field_order' => 2,
						'string_list_size' => 50,
					]
			);

			DB::table('object_field')->insert(
					[
						'id' => DB::table('object_sequence')->insertGetId(['id' => null, 'class_model' => '\Telenok\Core\Model\Object\Field']),
						'title' => json_encode(['en' => 'Active'], JSON_UNESCAPED_UNICODE),
						'title_list' => json_encode(['en' => 'Active'], JSON_UNESCAPED_UNICODE),
						'key' => 'active',
						'code' => 'active',
						'active' => 1,
						'field_object_type' => $modelWERId,
						'field_object_tab' => $tabVisibleId,
						'multilanguage' => 0,
						'show_in_form' => 1,
						'show_in_list' => 1,
						'allow_search' => 1,
						'field_order' => 3,
					]
			);

			DB::table('object_field')->insert(
					[
						'id' => DB::table('object_sequence')->insertGetId(['id' => null, 'class_model' => '\Telenok\Core\Model\Object\Field']),
						'title' => json_encode(['en' => 'Created by'], JSON_UNESCAPED_UNICODE),
						'title_list' => json_encode(['en' => 'Created by'], JSON_UNESCAPED_UNICODE),
						'key' => 'created-by',
						'code' => 'created_by_user',
						'active' => 1,
						'field_object_type' => $modelWERId,
						'field_object_tab' => $tabAdditionallyId,
						'relation_one_to_many_belong_to' => DB::table('object_type')->where('code', 'user')->pluck('id'),
						'multilanguage' => 0,
						'show_in_form' => 1,
						'show_in_list' => 1,
						'allow_search' => 1,
						'field_order' => 4,
					]
			);

			DB::table('object_field')->insert(
					[
						'id' => DB::table('object_sequence')->insertGetId(['id' => null, 'class_model' => '\Telenok\Core\Model\Object\Field']),
						'title' => json_encode(['en' => 'Updated by'], JSON_UNESCAPED_UNICODE),
						'title_list' => json_encode(['en' => 'Updated by'], JSON_UNESCAPED_UNICODE),
						'key' => 'updated-by',
						'code' => 'updated_by_user',
						'active' => 1,
						'field_object_type' => $modelWERId,
						'field_object_tab' => $tabAdditionallyId,
						'relation_one_to_many_belong_to' => DB::table('object_type')->where('code', 'user')->pluck('id'),
						'multilanguage' => 0,
						'show_in_form' => 1,
						'show_in_list' => 1,
						'allow_search' => 1,
						'field_order' => 5,
					]
			);

			(new \Telenok\Core\Model\Object\Field())->storeOrUpdate(
					[
						'title' => SeedWorkflowEventResourceTableTranslation::get('workflow-event-resource.field.resource'),
						'title_list' => SeedWorkflowEventResourceTableTranslation::get('workflow-event-resource.field.resource'),
						'key' => 'relation-many-to-many',
						'code' => 'resource',
						'active' => 1,
						'field_object_type' => $modelWERId,
						'field_object_tab' => $tabMainId,
						'show_in_form' => 1,
						'show_in_list' => 0,
						'allow_search' => 1,
						'multilanguage' => 0,
						'field_has' => 'resource',
						'allow_create' => 1,
						'allow_update' => 1,
						'field_order' => 6,
					]
			);

			(new \Telenok\Core\Model\Object\Field())->storeOrUpdate(
					[
						'title' => ['ru' => 'Бизнес-процесс: события и ресурсы', 'en' => 'Business-process: events and resources'],
						'title_list' => ['ru' => 'Бизнес-процесс: события и ресурсы', 'en' => 'Business-process: events and resources'],
						'key' => 'relation-one-to-many',
						'code' => 'event_resource',
						'active' => 1,
						'field_object_type' => 'workflow_process',
						'field_object_tab' => 'main',
						'show_in_form' => 1,
						'show_in_list' => 0,
						'allow_search' => 1,
						'multilanguage' => 0,
						'field_has' => 'workflow_event_resource',
						'allow_create' => 1,
						'allow_update' => 1,
						'field_order' => 7,
					]
			);

			(new \Telenok\Core\Model\Object\Field())->storeOrUpdate(
					[
						'title' => ['ru' => 'Бизнес-процесс: события и ресурсы', 'en' => 'Business-process: events and resources'],
						'title_list' => ['ru' => 'Бизнес-процесс: события и ресурсы', 'en' => 'Business-process: events and resources'],
						'key' => 'relation-one-to-many',
						'code' => 'event',
						'active' => 1,
						'field_object_type' => 'workflow_event',
						'field_object_tab' => 'main',
						'show_in_form' => 1,
						'show_in_list' => 0,
						'allow_search' => 1,
						'multilanguage' => 0,
						'field_has' => 'workflow_event_resource',
						'allow_create' => 1,
						'allow_update' => 1,
						'field_order' => 7,
					]
			);
		}
	}
}

class SeedWorkflowEventResourceTableTranslation extends \Telenok\Core\Interfaces\Translation\Controller {

	public static $keys = [
		'workflow-event-resource' => [
			'title' => [
				'ru' => 'Бизнес-процесс: события и ресурсы',
				'en' => 'Business-process: events and resources',
			],
			'title_list' => [
				'ru' => 'Бизнес-процесс: события и ресурсы',
				'en' => 'Business-process: events and resources',
			],
			'field' => [
				'resource' => [
					'ru' => "Ресурс",
					'en' => "Resource",
				],
			],
		]
	];

}