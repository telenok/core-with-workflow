<?php

namespace Telenok\Core\Field\SelectOne;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration; 

class Controller extends \Telenok\Core\Interfaces\Field\Controller {

    protected $key = 'select-one'; 
    protected $allowMultilanguage = false;
    protected $specialField = ['select_one_data'];
    protected $viewModel = "core::field.select-one.model-select-box";


    public function getModelSpecialAttribute($model, $key, $value)
    {
        try
        {
			if (in_array($key, ['select_one_data']))
			{ 
				return \Illuminate\Support\Collection::make(json_decode($value, true));
			}
			else
			{
				return parent::getModelSpecialAttribute($model, $key, $value);
			}
        }
        catch (\Exception $e)
        {
            return null;
        }
    }
    
    public function setModelSpecialAttribute($model, $key, $value)
    {  
		if (in_array($key, ['select_one_data']))
		{ 
			$default = [];

			if ($value instanceof \Illuminate\Support\Collection) 
			{
				if ($value->count())
				{
					$value = $value->toArray();
				}
				else
				{
					$value = $default;
				}
			}
			else
			{
				$value = $value ? : $default;
			} 

            if ($key == 'select_one_data')
            {
                $localeDefault = \Config::get('app.localeDefault');

                $title = array_get($value, 'title.' . $localeDefault, []);
                
                foreach(array_get($value, 'title', []) as $k => $t)
                {
                    if ($k != $localeDefault)
                    {
                        foreach($t as $k_ => $t_)
                        {
                            if (!trim($t_))
                            {
                                $value['title'][$k][$k_] = $title[$k_];
                            }
                        }
                    }
                }
            }
            
			$model->setAttribute($key, json_encode($value, JSON_UNESCAPED_UNICODE));
		}
		else
		{
			parent::setModelSpecialAttribute($model, $key, $value);
		}

        return true;
    }
     
    public function postProcess($model, $type, $input)
    {
		$table = $model->fieldObjectType()->first()->code;
        $fieldName = $model->code;

		if (!\Schema::hasColumn($table, $fieldName) && !\Schema::hasColumn($table, "`{$fieldName}`"))
		{
			\Schema::table($table, function(Blueprint $table) use ($fieldName)
			{
				$table->string($fieldName, 20)->nullable();
			});
		}

        return parent::postProcess($model, $type, $input);
    }
    
    
}

?>