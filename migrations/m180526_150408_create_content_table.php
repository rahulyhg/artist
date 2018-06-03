<?php

use yii\db\Migration;

/**
 * Handles the creation of table `content`.
 */
class m180526_150408_create_content_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('content', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'title' => $this->string(),
            'content' => $this->string(),
            'time' => $this->string(),
            'day' => $this->string(),
            'month' => $this->string(),
            'year' => $this->string(),
        ]);
        $this->insert('content', [
            'name' => 'yandex-music',
            'title' => '',
            'content' => '',
            'time' => '',
            'day' => '',
            'month' => '',
            'year' => '',
        ]);
        $this->insert('content', [
            'name' => 'google-music',
            'title' => '',
            'content' => '',
            'time' => '',
            'day' => '',
            'month' => '',
            'year' => '',
        ]);
        $this->insert('content', [
            'name' => 'itunes-music',
            'title' => '',
            'content' => '',
            'time' => '',
            'day' => '',
            'month' => '',
            'year' => '',
        ]);
        $this->insert('content', [
            'name' => 'vk-contact',
            'title' => '',
            'content' => '',
            'time' => '',
            'day' => '',
            'month' => '',
            'year' => '',
        ]);
        $this->insert('content', [
            'name' => 'youtube-contact',
            'title' => '',
            'content' => '',
            'time' => '',
            'day' => '',
            'month' => '',
            'year' => '',
        ]);
        $this->insert('content', [
            'name' => 'facebook-contact',
            'title' => '',
            'content' => '',
            'time' => '',
            'day' => '',
            'month' => '',
            'year' => '',
        ]);
        $this->insert('content', [
            'name' => 'instagram-contact',
            'title' => '',
            'content' => '',
            'time' => '',
            'day' => '',
            'month' => '',
            'year' => '',
        ]);
        $this->insert('content', [
            'name' => 'event',
            'title' => 'Заголовок эвента',
            'content' => 'Контент эвента',
            'time' => '16:00',
            'day' => '10',
            'month' => 'января',
            'year' => '2010',
        ]);
        $this->insert('content', [
            'name' => 'contact-agent',
            'title' => 'Мой агент ',
            'content' => '89164096188',
            'time' => '',
            'day' => '',
            'month' => '',
            'year' => '',
        ]);
        $this->insert('content', [
            'name' => 'contact-agent-two',
            'title' => 'Театр',
            'content' => 'почта крч',
            'time' => '',
            'day' => '',
            'month' => '',
            'year' => '',
        ]);

        $this->insert('content', [
            'name' => 'contact-mail',
            'title' => 'mail',
            'content' => 'mail@mail.ru',
            'time' => '',
            'day' => '',
            'month' => '',
            'year' => '',
        ]);



    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('content');
    }
}
