<?php
/* @var $this RThemeController */
/* @var $model RTheme */

$this->breadcrumbs=array(
	'Rthemes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RTheme', 'url'=>array('index')),
	array('label'=>'Manage RTheme', 'url'=>array('admin')),
);
?>

<h1>Create RTheme</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>