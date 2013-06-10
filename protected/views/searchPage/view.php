<?php
/* @var $this SearchPageController */
/* @var $model SearchPage */

$this->breadcrumbs=array(
	'Search Pages'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List SearchPage', 'url'=>array('index')),
	array('label'=>'Create SearchPage', 'url'=>array('create')),
	array('label'=>'Update SearchPage', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete SearchPage', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SearchPage', 'url'=>array('admin')),
);
?>

<h1>View SearchPage #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'Institution',
		'AmountPerInstitution',
		'ProjectTitle',
		'InstitutionID',
		'State',
		'Type',
		'FundRec',
		'Theme',
		'startDate',
		'endDate',
		'Publication',
		'DataSet',
		'PrincipalInvestigator',
		'consortia',
		'projectID',
		'personID',
	),
)); ?>
