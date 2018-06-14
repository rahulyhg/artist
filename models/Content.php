<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "content".
 *
 * @property int $id
 * @property string $name
 * @property string $title
 * @property string $content
 * @property string $time
 * @property string $day
 * @property string $month
 * @property string $year
 */
class Content extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'content';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'title'], 'string', 'max' => 255],
            [['content'], 'string']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Наименование',
            'title' => 'Заголовок',
            'content' => 'Контент',
//            'time' => 'Time',
//            'day' => 'Day',
//            'month' => 'Month',
//            'year' => 'Year',
        ];
    }
}
