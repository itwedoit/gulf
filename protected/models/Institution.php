<?php

/**
 * This is the model class for table "Institution".
 *
 * The followings are the available columns in table 'Institution':
 * @property string $InstitutionAbrev
 * @property string $Field3
 * @property string $AmountPerInstitution
 * @property integer $ID
 * @property string $InstitutionID
 * @property string $Institution
 * @property string $State
 * @property string $Type
 * @property integer $FundRec
 */
class Institution extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Institution the static model class
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
		return 'Institution';
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
			array('ID, FundRec', 'numerical', 'integerOnly'=>true),
			array('InstitutionAbrev, Field3, InstitutionID, Institution, State, Type', 'length', 'max'=>255),
			array('AmountPerInstitution', 'length', 'max'=>19),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('InstitutionAbrev, Field3, AmountPerInstitution, ID, InstitutionID, Institution, State, Type, FundRec', 'safe', 'on'=>'search'),
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
			'InstitutionAbrev' => 'Institution Abrev',
			'Field3' => 'Field3',
			'AmountPerInstitution' => 'Amount Per Institution',
			'ID' => 'ID',
			'InstitutionID' => 'Institution',
			'Institution' => 'Institution',
			'State' => 'State',
			'Type' => 'Type',
			'FundRec' => 'Fund Rec',
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

		$criteria->compare('InstitutionAbrev',$this->InstitutionAbrev,true);
		$criteria->compare('Field3',$this->Field3,true);
		$criteria->compare('AmountPerInstitution',$this->AmountPerInstitution,true);
		$criteria->compare('ID',$this->ID);
		$criteria->compare('InstitutionID',$this->InstitutionID,true);
		$criteria->compare('Institution',$this->Institution,true);
		$criteria->compare('State',$this->State,true);
		$criteria->compare('Type',$this->Type,true);
		$criteria->compare('FundRec',$this->FundRec);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}