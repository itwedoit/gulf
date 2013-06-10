<?php
/* @var $this PubController */
/* @var $model Pub */

$this->breadcrumbs=array(
	'Pubs'=>array('index'),
	$model->Title=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pub', 'url'=>array('index')),
	array('label'=>'Create Pub', 'url'=>array('create')),
	array('label'=>'View Pub', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage Pub', 'url'=>array('admin')),
);
?>

<h1>Update Pub <?php echo $model->ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>