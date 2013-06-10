<?php
/* @var $this GrantYearController */
/* @var $model GrantYear */

$this->breadcrumbs=array(
	'Grant Years'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List GrantYear', 'url'=>array('index')),
	array('label'=>'Create GrantYear', 'url'=>array('create')),
	array('label'=>'Update GrantYear', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete GrantYear', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GrantYear', 'url'=>array('admin')),
);
?>

<h1>View GrantYear #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'GrantUnitID',
		'GrantUnit',
		'ProgramID',
		'StartDate',
		'EndDate',
		'AwardDate',
	),
)); ?>
