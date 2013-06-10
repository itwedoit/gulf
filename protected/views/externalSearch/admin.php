<?php
/* @var $this ExternalSearchController */
/* @var $model ExternalSearch */

$this->breadcrumbs=array(
	'External Searches'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ExternalSearch', 'url'=>array('index')),
	array('label'=>'Create ExternalSearch', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('external-search-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage External Searches</h1>

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
	'id'=>'external-search-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'Grant',
		'Consortia',
		'Task',
		'ProjectTitle',
		'SubAwards',
		/*
		'LastName',
		'FirstName',
		'StartDate',
		'EndDate',
		'Keyword',
		'Publication',
		'InstitutionID',
		'State',
		'DataSet',
		'Award',
		'Type',
		'Theme1',
		'PersonID',
		'Theme2',
		'Theme3',
		'Theme4',
		'Theme5',
		'Institution',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
