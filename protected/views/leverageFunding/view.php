<?php
/* @var $this LeverageFundingController */
/* @var $model LeverageFunding */

$this->breadcrumbs=array(
	'Leverage Fundings'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List LeverageFunding', 'url'=>array('index')),
	array('label'=>'Create LeverageFunding', 'url'=>array('create')),
	array('label'=>'Update LeverageFunding', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete LeverageFunding', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage LeverageFunding', 'url'=>array('admin')),
);
?>

<h1>View LeverageFunding #<?php echo $model->id; ?></h1>
  <b> Amount:
	<br />
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'fundSource',
		'institutionID',
		'amount',
		'projectTitle',
		'startDate',
		'endDate',
		'objective',
		'how',
		'project',
		'principalInvestigator',
		'awardTerm',
		'institution',
		'personID',
	),
)); ?>
