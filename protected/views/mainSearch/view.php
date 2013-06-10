<?php
/* @var $this MainSearchController */
/* @var $model MainSearch */

$this->breadcrumbs=array(
	'Main Searches'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List MainSearch', 'url'=>array('index')),
	array('label'=>'Create MainSearch', 'url'=>array('create')),
	array('label'=>'Update MainSearch', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete MainSearch', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MainSearch', 'url'=>array('admin')),
);
?>

<h1>View Grant information for <?php echo $model->Institution; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Institution',
		'AmountPerInstitution',
		'ID',
		'PROGRAM',
		'InstitutionID',
		'State';'Type',
		'Type',
		'FundRec',
		'Theme',
		'startDate',
		'endDate',
		'Publication',
		'DataSet',
		'PrincipalInvestigator',
	),
)); ?>
