<?php
/* @var $this LevFundController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Leverage Funds',
);

$this->menu=array(
/*	array('label'=>'Create LevFund', 'url'=>array('create')), */
	array('label'=>'Manage LevFund', 'url'=>array('admin')),
);
?>

<h1>Lev Funds</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
