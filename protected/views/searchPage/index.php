<?php
/* @var $this SearchPageController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Search Pages',
);

$this->menu=array(
	array('label'=>'Create SearchPage', 'url'=>array('create')),
	array('label'=>'Manage SearchPage', 'url'=>array('admin')),
);
?>

<h1>Search Pages</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
