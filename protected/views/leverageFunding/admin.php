<?php
/* @var $this LeverageFundingController */
/* @var $model LeverageFunding */

$this->breadcrumbs=array(
	'Leverage Fundings'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List LeverageFunding', 'url'=>array('index')),
	array('label'=>'Create LeverageFunding', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('leverage-funding-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Leverage Fundings</h1>
 
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
 <p>Amount:</p>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'leverage-funding-grid',
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
		'project',
		'principalInvestigator',
		'awardTerm',
		'institution',
		 	/* 'id',
		
		'personID',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
