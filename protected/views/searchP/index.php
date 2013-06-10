<?php
/* @var $this SearchPController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Search Ps',
);

$this->menu=array(
	array('label'=>'Create SearchP', 'url'=>array('create')),
	array('label'=>'Manage SearchP', 'url'=>array('admin')),
);
?>

<h1>Search Ps</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
