<div class="form-group">
    
    {!! Form::hidden("{$field->code}", 0) !!}
    
	<?php
	$switchDomAttr = ['class' => 'ace ace-switch ace-switch-3'];
	$inputDomAttr = ['class' => 'form-control'];
	$disabled = false;

	if (!$model->exists)
	{
		$value = $field->active_default;
	}
	else
	{
		$value = $model->{$field->code};
	}

        if ( (!$model->exists && (!$field->allow_create || !$permissionCreate)) || ($model->exists && (!$field->allow_update || !$permissionUpdate)) )
	{
		$switchDomAttr['disabled'] = 'disabled';
		$inputDomAttr['disabled'] = 'disabled';
		$disabled = true;
	}
	?> 
    {!! Form::label($disabled ? str_random() : "{$field->code}", $field->translate('title'), array('class' => 'col-sm-3 control-label no-padding-right')) !!}
	<div class="col-sm-9">
        @if ($disabled)
        {!! Form::hidden("{$field->code}", $value) !!}
        @endif
        {!! Form::checkbox("{$field->code}", 1, $value, $switchDomAttr) !!}
        <span class="lbl"></span>
    </div> 
</div>

<div class="form-group">
	{!! Form::label("active_at_start", $controller->LL('active_at_start'), array('class'=>'col-sm-3 control-label no-padding-right')) !!}
	<div class="col-sm-3">
		<div class="input-group datetime-picker" data-date-format="DD-MM-YYYY HH:mm:ss">
			<span class="input-group-addon">
				<i class="fa fa-calendar bigger-110"></i>
			</span>
			{!! Form::text("active_at_start", $model->active_at_start->setTimezone(\Config::get('app.timezone')), $inputDomAttr ) !!}
		</div>
	</div>
</div>

<div class="form-group">
	{!! Form::label("active_at_end", $controller->LL('active_at_end'), array('class'=>'col-sm-3 control-label no-padding-right')) !!}
	<div class="col-sm-3">
		<div class="input-group datetime-picker" data-date-format="DD-MM-YYYY HH:mm:ss">
			<span class="input-group-addon">
				<i class="fa fa-calendar bigger-110"></i>
			</span>
			{!! Form::text("active_at_end", $model->active_at_end->setTimezone(\Config::get('app.timezone')), $inputDomAttr ) !!}
		</div>
	</div>
</div>

