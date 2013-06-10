<?php
/* @var $this WorkshopController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Workshops',
);

$this->menu=array(
	array('label'=>'Create Workshop', 'url'=>array('create')),
	array('label'=>'Manage Workshop', 'url'=>array('admin')),
);
?>

<h1>Workshops</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
