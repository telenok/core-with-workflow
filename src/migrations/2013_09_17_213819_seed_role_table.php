<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedRoleTable extends Migration {

	public function up()
	{
		$modelTypeId = DB::table('object_type')->where('code', 'role')->pluck('id');

        $tabMainId = \SeedCommonFields::createTabMain($modelTypeId);
        $tabVisibleId = \SeedCommonFields::createTabVisible($modelTypeId);
        $tabAdditionallyId = \SeedCommonFields::createTabAdditionally($modelTypeId);

        \SeedCommonFields::alterId($modelTypeId, $tabMainId);
        \SeedCommonFields::alterTitle($modelTypeId, $tabMainId);
        \SeedCommonFields::alterActive($modelTypeId, $tabVisibleId);
        \SeedCommonFields::alterCreateUpdateBy($modelTypeId, $tabAdditionallyId);

		DB::table('object_field')->insert(
				[
					'id' => DB::table('object_sequence')->insertGetId(['id' => null, 'class_model' => '\App\Model\Telenok\Object\Field']),
					'title' => json_encode(SeedRoleTableTranslation::get('field.code'), JSON_UNESCAPED_UNICODE),
					'title_list' => json_encode(SeedRoleTableTranslation::get('field.code'), JSON_UNESCAPED_UNICODE),
					'key' => 'string',
					'code' => 'code',
					'active' => 1,
					'field_object_type' => $modelTypeId,
					'field_object_tab' => $tabMainId,
					'multilanguage' => 0,
					'show_in_form' => 1,
					'show_in_list' => 1,
					'allow_search' => 1,
					'allow_create' => 1,
					'allow_update' => 0,
					'field_order' => 3,
				]
		);
	}
}

class SeedRoleTableTranslation extends \Telenok\Core\Interfaces\Translation\Controller {

	public static $keys = [
        'field' => [
            'code' => [
                'ru' => "Код",
                'en' => "Code",
            ],
            'permission' => [
                'ru' => "Разрешение",
                'en' => "Permission",
            ],
        ],
	];

}
