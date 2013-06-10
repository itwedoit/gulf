<?php
/* @var $this WorkshopController */
/* @var $model Workshop */

$this->breadcrumbs=array(
	'Workshops'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Workshop', 'url'=>array('index')),
	array('label'=>'Manage Workshop', 'url'=>array('admin')),
);
?>

<h1>Create Workshop</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>