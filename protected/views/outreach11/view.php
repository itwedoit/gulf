<?php
/* @var $this OutreachController */
/* @var $model Outreach */

$this->breadcrumbs=array(
	'Outreaches'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Outreach', 'url'=>array('index')),
	array('label'=>'Create Outreach', 'url'=>array('create')),
	array('label'=>'Update Outreach', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Outreach', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Outreach', 'url'=>array('admin')),
);
?>

<h1>View Outreach #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Project',
		'OutreachProductActivity',
		'PartnersInActivity',
		'Deliverables',
		'TargetAudiences',
		'ImpactsOutcomes',
		'Link',
		'other',
	),
)); ?>
