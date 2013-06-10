<?php
/* @var $this MainSearchController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Main Searches',
);

$this->menu=array(
	array('label'=>'Create MainSearch', 'url'=>array('create')),
	array('label'=>'Manage MainSearch', 'url'=>array('admin')),
);
?>

<h1>Main Searches</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
