<?php

namespace app\models;


/**
 * This is the model class for table "files".
 *
 * @property int $id
 * @property string $name
 * @property string $path
 */
class Files extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'files';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'path'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'path' => 'Путь',
        ];
    }

    public function saveFile($filename)
    {
        $this->path = $filename;
        return $this->save(false);
    }
}
