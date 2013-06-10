<?php
/* @var $this WorkshopController */
/* @var $model Workshop */

$this->breadcrumbs=array(
	'Workshops'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Workshop', 'url'=>array('index')),
	array('label'=>'Create Workshop', 'url'=>array('create')),
	array('label'=>'View Workshop', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Workshop', 'url'=>array('admin')),
);
?>

<h1>Update Workshop <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>