<?php
/* @var $this PersonNewController */
/* @var $model PersonNew */

$this->breadcrumbs=array(
	'Person News'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PersonNew', 'url'=>array('index')),
	array('label'=>'Manage PersonNew', 'url'=>array('admin')),
);
?>

<h1>Create PersonNew</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>