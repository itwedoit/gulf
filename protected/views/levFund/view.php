<?php
/* @var $this LevFundController */
/* @var $model LevFund */

$this->breadcrumbs=array(
	'Lev Funds'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List LevFund', 'url'=>array('index')),
	array('label'=>'Create LevFund', 'url'=>array('create')),
	array('label'=>'Update LevFund', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete LevFund', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage LevFund', 'url'=>array('admin')),
);
?>

<h1>View LevFund #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'fundSource',
		'institutionID',
		'amount',
		'projectTitle',
		'startDate',
		'endDate',
		'objective',
		'how',
		'project',
	),
)); ?>
