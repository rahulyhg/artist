<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "articles".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $content
 * @property string $url
 * @property string $image
 * @property int $day
 * @property string $month
 * @property int $year
 */
class Articles extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'articles';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['day', 'year'], 'integer'],
            [['title', 'description', 'content', 'url', 'image', 'month'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'description' => 'Описание',
            'content' => 'Контент',
            'url' => 'Url',
            'image' => 'Картинка',
            'day' => 'День',
            'month' => 'Месяц',
            'year' => 'Год',
        ];
    }
    public function saveImage($filename)
    {
        $this->image = $filename;
        return $this->save(false);
    }
}
