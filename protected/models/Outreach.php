<?php

/**
 * This is the model class for table "Outreach".
 *
 * The followings are the available columns in table 'Outreach':
 * @property integer $id
 * @property string $Project
 * @property string $Outreachproduct
 * @property string $Partners
 * @property string $Deliverable
 * @property string $TargetAudience
 * @property string $Impacts
 * @property string $Link
 * @property string $personID
 * @property string $projectID
 */
class Outreach extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Outreach the static model class
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
		return 'Outreach';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id', 'numerical', 'integerOnly'=>true),
			array('Project, Outreachproduct, Partners, Deliverable, TargetAudience, Impacts, Link, personID, projectID', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, Project, Outreachproduct, Partners, Deliverable, TargetAudience, Impacts, Link, personID, projectID', 'safe', 'on'=>'search'),
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
			'Project' => 'Project',
			'Outreachproduct' => 'Outreachproduct',
			'Partners' => 'Partners',
			'Deliverable' => 'Deliverable',
			'TargetAudience' => 'Target Audience',
			'Impacts' => 'Impacts',
			'Link' => 'Link',
			'personID' => 'Person',
			'projectID' => 'Project',
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
		$criteria->compare('Project',$this->Project,true);
		$criteria->compare('Outreachproduct',$this->Outreachproduct,true);
		$criteria->compare('Partners',$this->Partners,true);
		$criteria->compare('Deliverable',$this->Deliverable,true);
		$criteria->compare('TargetAudience',$this->TargetAudience,true);
		$criteria->compare('Impacts',$this->Impacts,true);
		$criteria->compare('Link',$this->Link,true);
		$criteria->compare('personID',$this->personID,true);
		$criteria->compare('projectID',$this->projectID,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}