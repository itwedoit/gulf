<?php

/**
 * This is the model class for table "rState".
 *
 * The followings are the available columns in table 'rState':
 * @property integer $ID
 * @property string $StateID
 * @property string $State
 * @property string $TotalFunds
 * @property string $Type
 */
class State extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return State the static model class
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
		return 'rState';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('StateID', 'required'),
			array('ID', 'numerical', 'integerOnly'=>true),
			array('StateID, State, TotalFunds, Type', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, StateID, State, TotalFunds, Type', 'safe', 'on'=>'search'),
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
			'StateID' => 'State',
			'State' => 'State',
			'TotalFunds' => 'Total Funds',
			'Type' => 'Type',
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
		$criteria->compare('StateID',$this->StateID,true);
		$criteria->compare('State',$this->State,true);
		$criteria->compare('TotalFunds',$this->TotalFunds,true);
		$criteria->compare('Type',$this->Type,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}