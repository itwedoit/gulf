<?php
/* @var $this SearchPController */
/* @var $model SearchP */

$this->breadcrumbs=array(
	'Search Ps'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List SearchP', 'url'=>array('index')),
	array('label'=>'Create SearchP', 'url'=>array('create')),
	array('label'=>'Update SearchP', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete SearchP', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SearchP', 'url'=>array('admin')),
);
?>

<h1>View Project Detail Page</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
	   'ProjectTitle',
		'Institution',
			'PrincipalInvestigator',
      'AmountPerInstitution',
		'InstitutionID',
		'State',
		'Type',
		
		'Theme',
		'startDate',
		'endDate',
		'Publication',
		'DataSet',
	
		'consortia',
		
	
	),
)); ?>
