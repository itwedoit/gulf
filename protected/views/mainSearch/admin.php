<?php
/* @var $this MainSearchController */
/* @var $model MainSearch */

$this->breadcrumbs=array(
	'Main Searches'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List MainSearch', 'url'=>array('index')),
	array('label'=>'Create MainSearch', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('main-search-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Main Searches</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" >
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'main-search-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'PROGRAM',
    'Institution',
		'AmountPerInstitution',
		'InstitutionID',
		'State', 
		 'Type',
		 'Theme',
		 'PrincipalInvestigator',
     'ID',
		 'FundRec',
		 'startDate',
		'endDate',
		/*'Publication',
		'DataSet',
		
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
