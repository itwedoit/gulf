<?php
/* @var $this PersonNewController */
/* @var $model PersonNew */

$this->breadcrumbs=array(
	'Person News'=>array('index'),
	$model->personID=>array('view','id'=>$model->personID),
	'Update',
);

$this->menu=array(
	array('label'=>'List PersonNew', 'url'=>array('index')),
	array('label'=>'Create PersonNew', 'url'=>array('create')),
	array('label'=>'View PersonNew', 'url'=>array('view', 'id'=>$model->personID)),
	array('label'=>'Manage PersonNew', 'url'=>array('admin')),
);
?>

<h1>Update PersonNew <?php echo $model->personID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>