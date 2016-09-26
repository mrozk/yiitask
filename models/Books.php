<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "books".
 *
 * @property integer $id
 * @property string $name
 * @property string $create_date
 * @property string $book_date
 * @property string $authors
 */
class Books extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'books';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'create_date', 'book_date', 'authors'], 'required'],
            [['create_date', 'book_date'], 'safe'],
            [['authors'], 'string'],
            [['name'], 'string', 'max' => 512],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'create_date' => 'Дата добавления',
            'book_date' => 'Дата издания',
            'authors' => 'Aвторы',
        ];
    }
}
