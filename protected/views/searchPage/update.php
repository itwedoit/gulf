<?php
/* @var $this SearchPageController */
/* @var $model SearchPage */

$this->breadcrumbs=array(
	'Search Pages'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List SearchPage', 'url'=>array('index')),
	array('label'=>'Create SearchPage', 'url'=>array('create')),
	array('label'=>'View SearchPage', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage SearchPage', 'url'=>array('admin')),
);
?>

<h1>Update SearchPage <?php echo $model->ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>