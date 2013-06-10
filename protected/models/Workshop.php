<?php

/**
 * This is the model class for table "Workshops".
 *
 * The followings are the available columns in table 'Workshops':
 * @property double $id
 * @property string $Project
 * @property string $InternalExternal
 * @property string $Date1
 * @property string $Location
 * @property string $Organizer
 * @property string $Objective
 * @property string $Participants
 * @property string $Participant
 * @property string $Website
 * @property string $projectID
 * @property string $personID
 */
class Workshop extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Workshop the static model class
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
		return 'Workshops';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id', 'numerical'),
			array('Project, InternalExternal, Date1, Location, Organizer, Objective, Participants, Participant, Website, projectID, personID', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, Project, InternalExternal, Date1, Location, Organizer, Objective, Participants, Participant, Website, projectID, personID', 'safe', 'on'=>'search'),
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
			'InternalExternal' => 'Internal External',
			'Date1' => 'Date1',
			'Location' => 'Location',
			'Organizer' => 'Organizer',
			'Objective' => 'Objective',
			'Participants' => 'Participants',
			'Participant' => 'Participant',
			'Website' => 'Website',
			'projectID' => 'Project',
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
		$criteria->compare('Project',$this->Project,true);
		$criteria->compare('InternalExternal',$this->InternalExternal,true);
		$criteria->compare('Date1',$this->Date1,true);
		$criteria->compare('Location',$this->Location,true);
		$criteria->compare('Organizer',$this->Organizer,true);
		$criteria->compare('Objective',$this->Objective,true);
		$criteria->compare('Participants',$this->Participants,true);
		$criteria->compare('Participant',$this->Participant,true);
		$criteria->compare('Website',$this->Website,true);
		$criteria->compare('projectID',$this->projectID,true);
		$criteria->compare('personID',$this->personID,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}