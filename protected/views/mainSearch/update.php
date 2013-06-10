<?php
/* @var $this MainSearchController */
/* @var $model MainSearch */

$this->breadcrumbs=array(
	'Main Searches'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List MainSearch', 'url'=>array('index')),
	array('label'=>'Create MainSearch', 'url'=>array('create')),
	array('label'=>'View MainSearch', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage MainSearch', 'url'=>array('admin')),
);
?>

<h1>Update MainSearch <?php echo $model->ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>