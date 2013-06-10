<?php
/* @var $this RThemeController */
/* @var $model RTheme */

$this->breadcrumbs=array(
	'Rthemes'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List RTheme', 'url'=>array('index')),
	array('label'=>'Create RTheme', 'url'=>array('create')),
	array('label'=>'Update RTheme', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete RTheme', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RTheme', 'url'=>array('admin')),
);
?>

<h1>View RTheme #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'Theme',
		'ThemeDescription',
	),
)); ?>
