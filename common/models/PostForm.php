<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 17.07.2018
 * Time: 16:18
 */

namespace common\models;

use yii\db\ActiveRecord;

class PostForm extends ActiveRecord{



    public static function tableName()
    {
        return 'articles';
    }

    public function attributeLabels()
    {
        return [
            'title' => 'Заголовок статьи',
            'text' => 'Текст статьи'
        ];
    }

    public function rules()
    {
        return [
            [['title','text'], 'required']
        ];
    }

}