<?php
/* @var $this GranteesController */
/* @var $model Grantees */

$this->breadcrumbs=array(
	'Grantees'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Grantees', 'url'=>array('index')),
	array('label'=>'Manage Grantees', 'url'=>array('admin')),
);
?>

<h1>Create Grantees</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>