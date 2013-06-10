<?php
/* @var $this LeverageFundingController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Leverage Fundings',
);

$this->menu=array(
	array('label'=>'Create LeverageFunding', 'url'=>array('create')),
	array('label'=>'Manage LeverageFunding', 'url'=>array('admin')),
);
?>

<h1>Leverage Fundings</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
