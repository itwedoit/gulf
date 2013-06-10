<?php

/**
 * This is the model class for table "report".
 *
 * The followings are the available columns in table 'report':
 * @property string $Award
 * @property string $Project
 * @property string $Task
 * @property string $Theme
 * @property string $ProjectTitle
 * @property string $SubAwards
 * @property string $LastName
 * @property string $FirstName
 * @property string $StartDate
 * @property string $EndDate
 * @property string $Publication
 * @property string $AwardAmount
 */
class Report extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Report the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'report';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Award, Project, Task, Theme, ProjectTitle, SubAwards, LastName, FirstName, StartDate, EndDate, Publication, AwardAmount', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Award, Project, Task, Theme, ProjectTitle, SubAwards, LastName, FirstName, StartDate, EndDate, Publication, AwardAmount', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Award' => 'Award',
			'Project' => 'Project',
			'Task' => 'Task',
			'Theme' => 'Theme',
			'ProjectTitle' => 'Project Title',
			'SubAwards' => 'Sub Awards',
			'LastName' => 'Last Name',
			'FirstName' => 'First Name',
			'StartDate' => 'Start Date',
			'EndDate' => 'End Date',
			'Publication' => 'Publication',
			'AwardAmount' => 'Award Amount',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('Award',$this->Award,true);
		$criteria->compare('Project',$this->Project,true);
		$criteria->compare('Task',$this->Task,true);
		$criteria->compare('Theme',$this->Theme,true);
		$criteria->compare('ProjectTitle',$this->ProjectTitle,true);
		$criteria->compare('SubAwards',$this->SubAwards,true);
		$criteria->compare('LastName',$this->LastName,true);
		$criteria->compare('FirstName',$this->FirstName,true);
		$criteria->compare('StartDate',$this->StartDate,true);
		$criteria->compare('EndDate',$this->EndDate,true);
		$criteria->compare('Publication',$this->Publication,true);
		$criteria->compare('AwardAmount',$this->AwardAmount,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}