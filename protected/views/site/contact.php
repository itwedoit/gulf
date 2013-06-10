<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle = Yii::app()->name . ' - Data Entry Forms';
?>
<h1>Internal Search</h1>



<p>Use this to search the data for information related to the GoMRI.</p>


<div><?php echo CHtml::label('Select a Table', 'modelList') ?></div>
<?php
echo CHtml::listBox('modelList', '', array('Person' => 'People', 'Project' => 'Project', 'Institution' => 'Institution', 'Publication' => 'Publication', 'Outreach' => 'Outreach', 'Quotes' => 'Quotes', 'LeverageFunding' => 'Leverage Funding', 'Cost' => 'Cost', 'Workshop' => 'Workshop'), array(
    'ajax' => array(
        'type' => 'GET',
        'url' => Controller :: createUrl('getColumn'),
        'data' => 'js:{"name": $("#modelList option:selected" ).val()}',
        'dataType' => 'json',
        'success' => 'js:function(data){
                $("#colList option").remove();
                $("#selectedCol option").remove();
                $.each(data, function(i, value) {
                    $("#colList").append($("<option>").text(value).attr("value", value));
                });
            }',
    ),
    'style' => 'width: 200px;margin-bottom: 20px;'
));
?>

<div><?php echo CHtml::label('Select a Column', 'colList') ?></div>

<div>

    <div style="float: left;">
        <div><?php echo CHtml::listBox('colList', '', array(), array('style' => 'width: 200px;margin-right: 30px;')); ?></div>
    </div>

    <div style="float: left;">
        <div><?php echo CHtml::button('Add >>', array('id' => 'add')); ?></div>
        <div><?php echo CHtml::button('<< Remove', array('id' => 'remove')); ?></div>
    </div>

    <div style="float: left;">
        <?php echo CHtml::listBox('selectedCol', '', array(), array('style' => 'width: 200px;margin-left: 30px;')); ?>
    </div>
</div>

<div style="clear: both;"></div>


<script>
    $(function(){
        $("#add").live('click',function(){
            $("#colList > option:selected").each(function(){
                $(this).remove().appendTo("#selectedCol");
            });
        });
    
        $("#remove").live('click',function(){
            $("#selectedCol > option:selected").each(function(){
                $(this).remove().appendTo("#colList");
            });
        });
    });

</script>


<br><br>

<?php
$model = new Project;
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'project-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'id',
        'ProjectTitle',
        array(
            'header' => 'get user',
//            'name' => 'userId',
//            'filter' => CHtml::listData(User::model()->findAll(array('order' => 'username ASC')), 'id', 'username'),
            'value' => '$data->getPeople()',
            'type' => 'raw',
        ),
//        array(
//            'header' => 'related',
//            'value' => 'implode(",<br />",$data->getRelated("people"))',
//            'type' => 'raw',
//        ),
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));
?>