<?php

/**
 * This is the model class for table "paper".
 *
 * The followings are the available columns in table 'paper':
 * @property integer $id
 * @property string $paper_code
 * @property string $name
 * @property string $description
 * @property string $price
 * @property string $price_in
 * @property integer $stock
 * @property integer $status
 * @property integer $created_time
 */
class Paper extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'paper';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('paper_code, name, price, stock, status, created_time', 'required'),
			array('stock, status, created_time', 'numerical', 'integerOnly'=>true),
			array('paper_code', 'length', 'max'=>100),
			array('name', 'length', 'max'=>255),
			array('description', 'length', 'max'=>500),
			array('price, price_in', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, paper_code, name, description, price, price_in, stock, status, created_time', 'safe', 'on'=>'search'),
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
			'paper_code' => 'Paper Code',
			'name' => 'Name',
			'description' => 'Description',
			'price' => 'Price',
			'price_in' => 'Price In',
			'stock' => 'Stock',
			'status' => 'Status',
			'created_time' => 'Created Time',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('paper_code',$this->paper_code,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('price',$this->price,true);
		$criteria->compare('price_in',$this->price_in,true);
		$criteria->compare('stock',$this->stock);
		$criteria->compare('status',$this->status);
		$criteria->compare('created_time',$this->created_time);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Paper the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
