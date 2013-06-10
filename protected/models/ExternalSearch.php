<?php

/**
 * This is the model class for table "Projectnew".
 *
 * The followings are the available columns in table 'Projectnew':
 * @property integer $id
 * @property string $Grant
 * @property string $Consortia
 * @property string $Task
 * @property string $ProjectTitle
 * @property string $SubAwards
 * @property string $LastName
 * @property string $FirstName
 * @property string $StartDate
 * @property string $EndDate
 * @property string $Keyword
 * @property string $Publication
 * @property string $InstitutionID
 * @property string $State
 * @property string $DataSet
 * @property string $Award
 * @property string $Type
 * @property string $Theme1
 * @property string $PersonID
 * @property string $Theme2
 * @property string $Theme3
 * @property string $Theme4
 * @property string $Theme5
 * @property string $Institution
 */
class ExternalSearch extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ExternalSearch the static model class
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
		return 'Projectnew';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Grant, Consortia, Task, ProjectTitle, SubAwards, LastName, FirstName, StartDate, EndDate, Publication, DataSet, Institution', 'length', 'max'=>255),
			array('InstitutionID, Type', 'length', 'max'=>20),
			array('State, PersonID', 'length', 'max'=>10),
			array('Award', 'length', 'max'=>30),
			array('Theme1, Theme2, Theme3, Theme4, Theme5', 'length', 'max'=>100),
			array('Keyword', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, Grant, Consortia, Task, ProjectTitle, SubAwards, LastName, FirstName, StartDate, EndDate, Keyword, Publication, InstitutionID, State, DataSet, Award, Type, Theme1, PersonID, Theme2, Theme3, Theme4, Theme5, Institution', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'Grant' => 'Grant',
			'Consortia' => 'Consortia',
			'Task' => 'Task',
			'ProjectTitle' => 'Project Title',
			'SubAwards' => 'Sub Awards',
			'LastName' => 'Last Name',
			'FirstName' => 'First Name',
			'StartDate' => 'Start Date',
			'EndDate' => 'End Date',
			'Keyword' => 'Keyword',
			'Publication' => 'Publication',
			'InstitutionID' => 'Institution',
			'State' => 'State',
			'DataSet' => 'Data Set',
			'Award' => 'Award',
			'Type' => 'Type',
			'Theme1' => 'Theme1',
			'PersonID' => 'Person',
			'Theme2' => 'Theme2',
			'Theme3' => 'Theme3',
			'Theme4' => 'Theme4',
			'Theme5' => 'Theme5',
			'Institution' => 'Institution',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('Grant',$this->Grant,true);
		$criteria->compare('Consortia',$this->Consortia,true);
		$criteria->compare('Task',$this->Task,true);
		$criteria->compare('ProjectTitle',$this->ProjectTitle,true);
		$criteria->compare('SubAwards',$this->SubAwards,true);
		$criteria->compare('LastName',$this->LastName,true);
		$criteria->compare('FirstName',$this->FirstName,true);
		$criteria->compare('StartDate',$this->StartDate,true);
		$criteria->compare('EndDate',$this->EndDate,true);
		$criteria->compare('Keyword',$this->Keyword,true);
		$criteria->compare('Publication',$this->Publication,true);
		$criteria->compare('InstitutionID',$this->InstitutionID,true);
		$criteria->compare('State',$this->State,true);
		$criteria->compare('DataSet',$this->DataSet,true);
		$criteria->compare('Award',$this->Award,true);
		$criteria->compare('Type',$this->Type,true);
		$criteria->compare('Theme1',$this->Theme1,true);
		$criteria->compare('PersonID',$this->PersonID,true);
		$criteria->compare('Theme2',$this->Theme2,true);
		$criteria->compare('Theme3',$this->Theme3,true);
		$criteria->compare('Theme4',$this->Theme4,true);
		$criteria->compare('Theme5',$this->Theme5,true);
		$criteria->compare('Institution',$this->Institution,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}