<?php

/**
 * This is the model class for table "rTheme".
 *
 * The followings are the available columns in table 'rTheme':
 * @property integer $ID
 * @property string $Theme
 * @property string $ThemeDescription
 */
class RTheme extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return RTheme the static model class
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
		return 'rTheme';
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
			array('Theme, ThemeDescription', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, Theme, ThemeDescription', 'safe', 'on'=>'search'),
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
			'Theme' => 'Theme',
			'ThemeDescription' => 'Theme Description',
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
		$criteria->compare('Theme',$this->Theme,true);
		$criteria->compare('ThemeDescription',$this->ThemeDescription,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}