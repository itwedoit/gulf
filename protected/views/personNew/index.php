<?php
/* @var $this PersonNewController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Person News',
);

$this->menu=array(
	array('label'=>'Create PersonNew', 'url'=>array('create')),
	array('label'=>'Manage PersonNew', 'url'=>array('admin')),
);
?>

<h1>Person News</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
