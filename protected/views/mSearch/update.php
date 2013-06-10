<?php
/* @var $this MSearchController */
/* @var $model MSearch */

$this->breadcrumbs=array(
	'Project Searche'=>array('admin'),
//	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Project', 'url'=>array('index')),
	array('label'=>'Create Project', 'url'=>array('create')),
	array('label'=>'View Project', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Project', 'url'=>array('admin')),
);
?>

<h1>Update Project <?//php echo $model->Task; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>