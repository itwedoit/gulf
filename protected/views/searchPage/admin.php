<?php
/* @var $this SearchPageController */
/* @var $model SearchPage */

$this->breadcrumbs=array(
	'Search Pages'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List SearchPage', 'url'=>array('index')),
	array('label'=>'Create SearchPage', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('search-page-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Search Pages</h1>

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
	'id'=>'search-page-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
     'total',
		 'consortia',
		
     'PrincipalInvestigator',
		'Institution',
    'State',
    'Theme',
		'AmountPerInstitution',
		 'startDate',
		'endDate',
		 'Publication',
		
    /*  'Type',
     'ProjectTitle',
		'ID',
    'FundRec',
		'InstitutionID',
		'DataSet',
		'projectID',
		'personID',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
