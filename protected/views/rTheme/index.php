<?php
/* @var $this RThemeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rthemes',
);

$this->menu=array(
	array('label'=>'Create RTheme', 'url'=>array('create')),
	array('label'=>'Manage RTheme', 'url'=>array('admin')),
);
?>

<h1>Rthemes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
