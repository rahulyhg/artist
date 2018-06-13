<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "events".
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property string $time
 * @property string $day
 * @property string $month
 * @property int $year
 * @property string $image
 */
class Events extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'events';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
            [['year'], 'integer'],
            [['title', 'time', 'day', 'month', 'image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'content' => 'Content',
            'time' => 'Time',
            'day' => 'Day',
            'month' => 'Month',
            'year' => 'Year',
            'image' => 'Image',
        ];
    }
    public function saveImage($filename)
    {
        $this->image = $filename;
        return $this->save(false);
    }
}
