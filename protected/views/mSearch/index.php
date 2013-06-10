<?php
/* @var $this MSearchController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Msearches',
);

$this->menu=array(
	array('label'=>'Create MSearch', 'url'=>array('create')),
	array('label'=>'Manage MSearch', 'url'=>array('admin')),
);
?>

<h1>Projects</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
