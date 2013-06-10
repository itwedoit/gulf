<?php
/* @var $this GranteesController */
/* @var $model Grantees */

$this->breadcrumbs=array(
	'Grantees'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Grantees', 'url'=>array('index')),
	array('label'=>'Create Grantees', 'url'=>array('create')),
	array('label'=>'View Grantees', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage Grantees', 'url'=>array('admin')),
);
?>

<h1>Update Grantees <?php echo $model->ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>