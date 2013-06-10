<?php
/* @var $this WorkshopController */
/* @var $model Workshop */

$this->breadcrumbs=array(
	'Workshops'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Workshop', 'url'=>array('index')),
	array('label'=>'Create Workshop', 'url'=>array('create')),
	array('label'=>'Update Workshop', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Workshop', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Workshop', 'url'=>array('admin')),
);
?>

<h1>View Workshop #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Project',
		'InternalExternal',
		'Date1',
		'Location',
		'Organizer',
		'Objective',
		'Participants',
		'Participant',
		'Website',
		'projectID',
		'personID',
	),
)); ?>
