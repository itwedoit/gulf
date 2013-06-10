<?php
/* @var $this CostController */
/* @var $model Cost */

$this->breadcrumbs=array(
	'Costs'=>array('index'),
	$model->CostID,
);

$this->menu=array(
	array('label'=>'List Cost', 'url'=>array('index')),
	array('label'=>'Create Cost', 'url'=>array('create')),
	array('label'=>'Update Cost', 'url'=>array('update', 'id'=>$model->CostID)),
	array('label'=>'Delete Cost', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->CostID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Cost', 'url'=>array('admin')),
);
?>

<h1>View Cost #<?php echo $model->CostID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'CostID',
		'Salaries',
		'FringeBenefits',
		'Equipment',
		'Travel',
		'ParticipantSupportCosts',
		'Materials',
		'PublicationCosts',
		'ConsultantServices',
		'ComputerServices',
		'SubAwards',
		'FacilityRental',
		'SARATime',
		'OtherDirecCost',
		'IndirectCost',
		'Task',
		'Theme',
		'Year',
		'InstitutionAbrev',
		'EntryDate',
	),
)); ?>
