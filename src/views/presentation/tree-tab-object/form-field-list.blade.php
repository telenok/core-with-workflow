
	{{ \App::make('telenok.config')->getObjectFieldController()->get($field->key)->getFormModelContent($controller, $model, $field, $uniqueId) }}