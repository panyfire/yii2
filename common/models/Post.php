<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 17.07.2018
 * Time: 14:00
 */

namespace common\models;


use yii\db\ActiveRecord;

class Post extends ActiveRecord{

    public static function tableName()
    {
        return 'articles';
    }

}