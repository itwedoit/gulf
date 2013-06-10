<?php
/* @var $this PubController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pubs',
);

$this->menu=array(
	array('label'=>'Create Pub', 'url'=>array('create')),
	array('label'=>'Manage Pub', 'url'=>array('admin')),
);
?>

<h1>Pubs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
