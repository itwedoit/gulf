<?php
/* @var $this CostController */
/* @var $model Cost */

$this->breadcrumbs=array(
	'Costs'=>array('index'),
	$model->CostID=>array('view','id'=>$model->CostID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Cost', 'url'=>array('index')),
	array('label'=>'Create Cost', 'url'=>array('create')),
	array('label'=>'View Cost', 'url'=>array('view', 'id'=>$model->CostID)),
	array('label'=>'Manage Cost', 'url'=>array('admin')),
);
?>

<h1>Update Cost <?php echo $model->CostID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>