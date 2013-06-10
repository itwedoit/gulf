<?php
/* @var $this SearchPController */
/* @var $model SearchP */

$this->breadcrumbs=array(
	'Search Ps'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List SearchP', 'url'=>array('index')),
	array('label'=>'Create SearchP', 'url'=>array('create')),
	array('label'=>'View SearchP', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage SearchP', 'url'=>array('admin')),
);
?>

<h1>Update SearchP <?php echo $model->ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>