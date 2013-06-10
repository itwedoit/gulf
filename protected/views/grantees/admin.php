<?php
/* @var $this GranteesController */
/* @var $model Grantees */

$this->breadcrumbs=array(
	'Grantees'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Grantees', 'url'=>array('index')),
	array('label'=>'Create Grantees', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('grantees-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Grantees</h1>

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
	'id'=>'grantees-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ID',
		'GulfState',
		'State',
		'Institution',
		'Year1',
		'Field4',
		/*
		'Field5',
		'Field6',
		'Field7',
		'Field8',
		'RFPIII',
		'RFPILead',
		'RFPISub',
		'Field12',
		'Field13',
		'Field14',
		'Field15',
		'Field16',
		'Field17',
		'Field18',
		'Field19',
		'RFPII',
		'Field21',
		'Field22',
		'Field23',
		'FundingSources',
		'TotalFundingReceived',
		'Field26',
		'Field27',
		'OceanLeadership',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
