<?php

/**
 * This is the model class for table "GrantUnit".
 *
 * The followings are the available columns in table 'GrantUnit':
 * @property integer $ID
 * @property string $GrantUnitID
 * @property string $GrantUnit
 * @property string $ProgramID
 * @property string $StartDate
 * @property string $EndDate
 * @property string $AwardDate
 */
class GrantYear extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return GrantYear the static model class
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
		return 'GrantUnit';
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
			array('GrantUnitID, GrantUnit', 'length', 'max'=>255),
			array('ProgramID, StartDate, EndDate, AwardDate', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, GrantUnitID, GrantUnit, ProgramID, StartDate, EndDate, AwardDate', 'safe', 'on'=>'search'),
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
			'GrantUnitID' => 'Grant Unit',
			'GrantUnit' => 'Grant Unit',
			'ProgramID' => 'Program',
			'StartDate' => 'Start Date',
			'EndDate' => 'End Date',
			'AwardDate' => 'Award Date',
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
		$criteria->compare('GrantUnitID',$this->GrantUnitID,true);
		$criteria->compare('GrantUnit',$this->GrantUnit,true);
		$criteria->compare('ProgramID',$this->ProgramID,true);
		$criteria->compare('StartDate',$this->StartDate,true);
		$criteria->compare('EndDate',$this->EndDate,true);
		$criteria->compare('AwardDate',$this->AwardDate,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}