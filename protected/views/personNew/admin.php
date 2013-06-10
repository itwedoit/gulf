<?php
/* @var $this PersonNewController */
/* @var $model PersonNew */

$this->breadcrumbs=array(
	'Person News'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List PersonNew', 'url'=>array('index')),
	array('label'=>'Create PersonNew', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('person-new-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Person News</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'person-new-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'personID',
		'intstituionAbbr',
		'institutionID',
		'Institution',
		'projectID',
		'firstName',
		/*
		'lastName',
		'Role',
		'eMailAddress',
		'secondaryRole',
		'email',
		'degreePursuing',
		'ThesisResearchTopic',
		'Department',
		'Supervisor',
		'ExpectedCompletionYear',
		'CompletionsQuarter',
		'SummerInternship',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
