<?php
/* @var $this MSearchController */
/* @var $model MSearch */

$this->breadcrumbs=array(
	'Projects'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Projects', 'url'=>array('index')),
	array('label'=>'Project Search', 'url'=>array('admin')),
);
?>

<h1>Create MSearch</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>