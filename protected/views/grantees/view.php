<?php
/* @var $this GranteesController */
/* @var $model Grantees */

$this->breadcrumbs=array(
	'Grantees'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List Grantees', 'url'=>array('index')),
	array('label'=>'Create Grantees', 'url'=>array('create')),
	array('label'=>'Update Grantees', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Grantees', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Grantees', 'url'=>array('admin')),
);
?>

<h1>View Grantees #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'GulfState',
		'State',
		'Institution',
		'Year1',
		'Field4',
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
	),
)); ?>
