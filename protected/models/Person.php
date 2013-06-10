<?php

/**
 * This is the model class for table "Person".
 *
 * The followings are the available columns in table 'Person':
 * @property integer $personID
 * @property string $intstituionAbbr
 * @property string $institutionID
 * @property string $Institution
 * @property string $projectID
 * @property string $firstName
 * @property string $lastName
 * @property string $Role
 * @property string $eMailAddress
 * @property string $secondaryRole
 * @property string $email
 * @property string $degreePursuing
 * @property string $ThesisResearchTopic
 * @property string $Department
 * @property string $Supervisor
 * @property double $ExpectedCompletionYear
 * @property string $CompletionsQuarter
 * @property string $SummerInternship
 */
class Person extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Person the static model class
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
		return 'Person';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('personID', 'required'),
			array('personID', 'numerical', 'integerOnly'=>true),
			array('ExpectedCompletionYear', 'numerical'),
			array('intstituionAbbr, institutionID, Institution, projectID, firstName, lastName, Role, eMailAddress, secondaryRole, email, degreePursuing, ThesisResearchTopic, Department, Supervisor, CompletionsQuarter, SummerInternship', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('personID, intstituionAbbr, institutionID, Institution, projectID, firstName, lastName, Role, eMailAddress, secondaryRole, email, degreePursuing, ThesisResearchTopic, Department, Supervisor, ExpectedCompletionYear, CompletionsQuarter, SummerInternship', 'safe', 'on'=>'search'),
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
			'personID' => 'Person',
			'intstituionAbbr' => 'Intstituion Abbr',
			'institutionID' => 'Institution',
			'Institution' => 'Institution',
			'projectID' => 'Project',
			'firstName' => 'First Name',
			'lastName' => 'Last Name',
			'Role' => 'Role',
			'eMailAddress' => 'E Mail Address',
			'secondaryRole' => 'Secondary Role',
			'email' => 'Email',
			'degreePursuing' => 'Degree Pursuing',
			'ThesisResearchTopic' => 'Thesis Research Topic',
			'Department' => 'Department',
			'Supervisor' => 'Supervisor',
			'ExpectedCompletionYear' => 'Expected Completion Year',
			'CompletionsQuarter' => 'Completions Quarter',
			'SummerInternship' => 'Summer Internship',
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

		$criteria->compare('personID',$this->personID);
		$criteria->compare('intstituionAbbr',$this->intstituionAbbr,true);
		$criteria->compare('institutionID',$this->institutionID,true);
		$criteria->compare('Institution',$this->Institution,true);
		$criteria->compare('projectID',$this->projectID,true);
		$criteria->compare('firstName',$this->firstName,true);
		$criteria->compare('lastName',$this->lastName,true);
		$criteria->compare('Role',$this->Role,true);
		$criteria->compare('eMailAddress',$this->eMailAddress,true);
		$criteria->compare('secondaryRole',$this->secondaryRole,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('degreePursuing',$this->degreePursuing,true);
		$criteria->compare('ThesisResearchTopic',$this->ThesisResearchTopic,true);
		$criteria->compare('Department',$this->Department,true);
		$criteria->compare('Supervisor',$this->Supervisor,true);
		$criteria->compare('ExpectedCompletionYear',$this->ExpectedCompletionYear);
		$criteria->compare('CompletionsQuarter',$this->CompletionsQuarter,true);
		$criteria->compare('SummerInternship',$this->SummerInternship,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}