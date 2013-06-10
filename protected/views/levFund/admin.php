<?php
/* @var $this LevFundController */
/* @var $model LevFund */

$this->breadcrumbs=array(
	'Leverage Funds'=>array('contact'),
	'Search',
);

$this->menu=array(
	array('label'=>'List LevFund', 'url'=>array('index')),
/*	array('label'=>'Create LevFund', 'url'=>array('create')),  */
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('lev-fund-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Search Leverage Funds</h1>

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
	'id'=>'lev-fund-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		
		'fundSource',
		'institutionID',
		'amount',
		'projectTitle',
		'startDate',
			'endDate',
		'objective',
		'how',
		'project',/*
    'id',
	
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
