<?php
/* @var $this RThemeController */
/* @var $model RTheme */

$this->breadcrumbs=array(
	'Rthemes'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List RTheme', 'url'=>array('index')),
	array('label'=>'Create RTheme', 'url'=>array('create')),
	array('label'=>'View RTheme', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage RTheme', 'url'=>array('admin')),
);
?>

<h1>Update RTheme <?php echo $model->ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>