<?php

/**
 * This is the model class for table "grantees".
 *
 * The followings are the available columns in table 'grantees':
 * @property integer $ID
 * @property string $GulfState
 * @property string $State
 * @property string $Institution
 * @property string $Year1
 * @property string $Field4
 * @property string $Field5
 * @property string $Field6
 * @property string $Field7
 * @property double $Field8
 * @property string $RFPIII
 * @property string $RFPILead
 * @property string $RFPISub
 * @property string $Field12
 * @property string $Field13
 * @property string $Field14
 * @property string $Field15
 * @property string $Field16
 * @property string $Field17
 * @property string $Field18
 * @property double $Field19
 * @property string $RFPII
 * @property string $Field21
 * @property double $Field22
 * @property string $Field23
 * @property double $FundingSources
 * @property string $TotalFundingReceived
 * @property string $Field26
 * @property string $Field27
 * @property string $OceanLeadership
 */
class Grantees extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Grantees the static model class
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
		return 'grantees';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ID', 'required'),
			array('ID', 'numerical', 'integerOnly'=>true),
			array('Field8, Field19, Field22, FundingSources', 'numerical'),
			array('GulfState, State, Institution, Year1, Field4, Field5, Field6, Field7, RFPILead, RFPISub, Field12, Field13, Field14, Field15, Field16, Field17, Field18, RFPII, Field21, Field23, OceanLeadership', 'length', 'max'=>255),
			array('RFPIII, TotalFundingReceived, Field26, Field27', 'length', 'max'=>19),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, GulfState, State, Institution, Year1, Field4, Field5, Field6, Field7, Field8, RFPIII, RFPILead, RFPISub, Field12, Field13, Field14, Field15, Field16, Field17, Field18, Field19, RFPII, Field21, Field22, Field23, FundingSources, TotalFundingReceived, Field26, Field27, OceanLeadership', 'safe', 'on'=>'search'),
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
			'ID' => 'ID',
			'GulfState' => 'Gulf State',
			'State' => 'State',
			'Institution' => 'Institution',
			'Year1' => 'Year1',
			'Field4' => 'Field4',
			'Field5' => 'Field5',
			'Field6' => 'Field6',
			'Field7' => 'Field7',
			'Field8' => 'Field8',
			'RFPIII' => 'Rfpiii',
			'RFPILead' => 'Rfpilead',
			'RFPISub' => 'Rfpisub',
			'Field12' => 'Field12',
			'Field13' => 'Field13',
			'Field14' => 'Field14',
			'Field15' => 'Field15',
			'Field16' => 'Field16',
			'Field17' => 'Field17',
			'Field18' => 'Field18',
			'Field19' => 'Field19',
			'RFPII' => 'Rfpii',
			'Field21' => 'Field21',
			'Field22' => 'Field22',
			'Field23' => 'Field23',
			'FundingSources' => 'Funding Sources',
			'TotalFundingReceived' => 'Total Funding Received',
			'Field26' => 'Field26',
			'Field27' => 'Field27',
			'OceanLeadership' => 'Ocean Leadership',
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

		$criteria->compare('ID',$this->ID);
		$criteria->compare('GulfState',$this->GulfState,true);
		$criteria->compare('State',$this->State,true);
		$criteria->compare('Institution',$this->Institution,true);
		$criteria->compare('Year1',$this->Year1,true);
		$criteria->compare('Field4',$this->Field4,true);
		$criteria->compare('Field5',$this->Field5,true);
		$criteria->compare('Field6',$this->Field6,true);
		$criteria->compare('Field7',$this->Field7,true);
		$criteria->compare('Field8',$this->Field8);
		$criteria->compare('RFPIII',$this->RFPIII,true);
		$criteria->compare('RFPILead',$this->RFPILead,true);
		$criteria->compare('RFPISub',$this->RFPISub,true);
		$criteria->compare('Field12',$this->Field12,true);
		$criteria->compare('Field13',$this->Field13,true);
		$criteria->compare('Field14',$this->Field14,true);
		$criteria->compare('Field15',$this->Field15,true);
		$criteria->compare('Field16',$this->Field16,true);
		$criteria->compare('Field17',$this->Field17,true);
		$criteria->compare('Field18',$this->Field18,true);
		$criteria->compare('Field19',$this->Field19);
		$criteria->compare('RFPII',$this->RFPII,true);
		$criteria->compare('Field21',$this->Field21,true);
		$criteria->compare('Field22',$this->Field22);
		$criteria->compare('Field23',$this->Field23,true);
		$criteria->compare('FundingSources',$this->FundingSources);
		$criteria->compare('TotalFundingReceived',$this->TotalFundingReceived,true);
		$criteria->compare('Field26',$this->Field26,true);
		$criteria->compare('Field27',$this->Field27,true);
		$criteria->compare('OceanLeadership',$this->OceanLeadership,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}