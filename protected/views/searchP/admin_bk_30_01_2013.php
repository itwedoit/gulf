<?php
/* @var $this SearchPController */
/* @var $model SearchP */

$this->breadcrumbs=array(
	'Search Page'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Search Page', 'url'=>array('index')),
	array('label'=>'Create Search Page', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('search-p-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Search Page</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" >
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
<div class="search-form" >

</div><!-- search-form -->
  <?php  $this->widget('ext.GroupGridView', array(
	'id'=>'search-p-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
	'totalA',
			
	),
));  ?>
<?php 

$this->widget('ext.GroupGridView', array(
      'id' => 'search-p-grid1',
      'dataProvider' => $model->search(),
      'columns' => array(
        'consortia',
		
     'PrincipalInvestigator',
		'Institution',
    'State',
    'Theme',
		'AmountPerInstitution',
		 'startDate',
		'endDate',
		 'Publication',
        array('class' => 'CLinkColumn'),
        array('class' => 'CButtonColumn'),         
      ),
    ));
?>
