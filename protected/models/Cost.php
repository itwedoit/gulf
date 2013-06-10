<?php

/**
 * This is the model class for table "Cost".
 *
 * The followings are the available columns in table 'Cost':
 * @property integer $CostID
 * @property integer $Salaries
 * @property integer $FringeBenefits
 * @property integer $Equipment
 * @property integer $Travel
 * @property integer $ParticipantSupportCosts
 * @property integer $Materials
 * @property integer $PublicationCosts
 * @property integer $ConsultantServices
 * @property integer $ComputerServices
 * @property integer $SubAwards
 * @property integer $FacilityRental
 * @property integer $SARATime
 * @property integer $OtherDirecCost
 * @property integer $IndirectCost
 * @property integer $Task
 * @property string $Theme
 * @property integer $Year
 * @property string $InstitutionAbrev
 * @property string $EntryDate
 */
class Cost extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Cost the static model class
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
		return 'Cost';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('CostID', 'required'),
			array('CostID, Salaries, FringeBenefits, Equipment, Travel, ParticipantSupportCosts, Materials, PublicationCosts, ConsultantServices, ComputerServices, SubAwards, FacilityRental, SARATime, OtherDirecCost, IndirectCost, Task, Year', 'numerical', 'integerOnly'=>true),
			array('Theme, InstitutionAbrev', 'length', 'max'=>255),
			array('EntryDate', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('CostID, Salaries, FringeBenefits, Equipment, Travel, ParticipantSupportCosts, Materials, PublicationCosts, ConsultantServices, ComputerServices, SubAwards, FacilityRental, SARATime, OtherDirecCost, IndirectCost, Task, Theme, Year, InstitutionAbrev, EntryDate', 'safe', 'on'=>'search'),
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
			'CostID' => 'Cost',
			'Salaries' => 'Salaries',
			'FringeBenefits' => 'Fringe Benefits',
			'Equipment' => 'Equipment',
			'Travel' => 'Travel',
			'ParticipantSupportCosts' => 'Participant Support Costs',
			'Materials' => 'Materials',
			'PublicationCosts' => 'Publication Costs',
			'ConsultantServices' => 'Consultant Services',
			'ComputerServices' => 'Computer Services',
			'SubAwards' => 'Sub Awards',
			'FacilityRental' => 'Facility Rental',
			'SARATime' => 'Saratime',
			'OtherDirecCost' => 'Other Direc Cost',
			'IndirectCost' => 'Indirect Cost',
			'Task' => 'Task',
			'Theme' => 'Theme',
			'Year' => 'Year',
			'InstitutionAbrev' => 'Institution Abrev',
			'EntryDate' => 'Entry Date',
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

		$criteria->compare('CostID',$this->CostID);
		$criteria->compare('Salaries',$this->Salaries);
		$criteria->compare('FringeBenefits',$this->FringeBenefits);
		$criteria->compare('Equipment',$this->Equipment);
		$criteria->compare('Travel',$this->Travel);
		$criteria->compare('ParticipantSupportCosts',$this->ParticipantSupportCosts);
		$criteria->compare('Materials',$this->Materials);
		$criteria->compare('PublicationCosts',$this->PublicationCosts);
		$criteria->compare('ConsultantServices',$this->ConsultantServices);
		$criteria->compare('ComputerServices',$this->ComputerServices);
		$criteria->compare('SubAwards',$this->SubAwards);
		$criteria->compare('FacilityRental',$this->FacilityRental);
		$criteria->compare('SARATime',$this->SARATime);
		$criteria->compare('OtherDirecCost',$this->OtherDirecCost);
		$criteria->compare('IndirectCost',$this->IndirectCost);
		$criteria->compare('Task',$this->Task);
		$criteria->compare('Theme',$this->Theme,true);
		$criteria->compare('Year',$this->Year);
		$criteria->compare('InstitutionAbrev',$this->InstitutionAbrev,true);
		$criteria->compare('EntryDate',$this->EntryDate,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}