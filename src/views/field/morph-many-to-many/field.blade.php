
<?php
    if (!$model->exists || $model->morph_many_to_many_has || !$model->morph_many_to_many_belong_to)
    {
        $linkedField = 'morph_many_to_many_has';
    }
    else
    {
        $linkedField = 'morph_many_to_many_belong_to';
    }
?>
 
<div class="form-group">
    {!! Form::label($linkedField, $controller->LL('entity.'.$linkedField), array('class'=>'col-sm-3 control-label no-padding-right')) !!}
    <div class="col-sm-9">
        <?php 

            $domAttr = [];

			if ($model->{$linkedField})
            {
                $domAttr['disabled'] = 'disabled';
            }

        ?>
        {!! Form::hidden($linkedField, $model->{$linkedField}) !!}
        {!! Form::select($linkedField, \App\Model\Telenok\Object\Type::get(['title', 'id'])->transform(function($item) { return ['title' => $item->translate('title'), 'id' => $item->id]; })->sortBy('title')->lists('title', 'id'), $model->{$linkedField}, $domAttr) !!}
    </div>
</div> 