<?php

/**
 * This is the model class for table "leverageFunding".
 *
 * The followings are the available columns in table 'leverageFunding':
 * @property integer $id
 * @property string $fundSource
 * @property integer $institutionID
 * @property string $amount
 * @property string $projectTitle
 * @property string $startDate
 * @property string $endDate
 * @property string $objective
 * @property string $how
 * @property string $project
 * @property string $principalInvestigator
 * @property string $awardTerm
 * @property string $institution
 * @property integer $personID
 */
class LevFun extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return LevFun the static model class
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
		return 'leverageFunding';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('institutionID, personID', 'numerical', 'integerOnly'=>true),
			array('fundSource, project', 'length', 'max'=>255),
			array('amount', 'length', 'max'=>11),
			array('projectTitle, principalInvestigator, institution', 'length', 'max'=>100),
			array('awardTerm', 'length', 'max'=>10),
			array('startDate, endDate, objective, how', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, fundSource, institutionID, amount, projectTitle, startDate, endDate, objective, how, project, principalInvestigator, awardTerm, institution, personID', 'safe', 'on'=>'search'),
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
			'fundSource' => 'Fund Source',
			'institutionID' => 'Institution',
			'amount' => 'Amount',
			'projectTitle' => 'Project Title',
			'startDate' => 'Start Date',
			'endDate' => 'End Date',
			'objective' => 'Objective',
			'how' => 'How',
			'project' => 'Project',
			'principalInvestigator' => 'Principal Investigator',
			'awardTerm' => 'Award Term',
			'institution' => 'Institution',
			'personID' => 'Person',
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
		$criteria->compare('fundSource',$this->fundSource,true);
		$criteria->compare('institutionID',$this->institutionID);
		$criteria->compare('amount',$this->amount,true);
		$criteria->compare('projectTitle',$this->projectTitle,true);
		$criteria->compare('startDate',$this->startDate,true);
		$criteria->compare('endDate',$this->endDate,true);
		$criteria->compare('objective',$this->objective,true);
		$criteria->compare('how',$this->how,true);
		$criteria->compare('project',$this->project,true);
		$criteria->compare('principalInvestigator',$this->principalInvestigator,true);
		$criteria->compare('awardTerm',$this->awardTerm,true);
		$criteria->compare('institution',$this->institution,true);
		$criteria->compare('personID',$this->personID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}