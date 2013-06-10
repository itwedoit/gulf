<?php
/* @var $this LevFunController */
/* @var $model LevFun */

$this->breadcrumbs=array(
	'Lev Funs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List LevFun', 'url'=>array('index')),
	array('label'=>'Create LevFun', 'url'=>array('create')),
	array('label'=>'Update LevFun', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete LevFun', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage LevFun', 'url'=>array('admin')),
);
?>

<h1>View LevFun #<?php echo $model->id; ?></h1>

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
		'principalInvestigator',
		'awardTerm',
		'institution',
		'personID',
	),
)); ?>
