<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property int $id
 * @property int $id_user
 * @property string $post_index
 * @property string $country_code
 * @property string $town
 * @property string $street
 * @property string $num_build
 * @property string $num_office
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_user', 'post_index', 'country_code', 'town', 'street', 'num_build'], 'required'],
            [['id_user'], 'integer'],
            [['post_index', 'town', 'street', 'num_build', 'num_office'], 'string', 'max' => 255],
            [['country_code'], 'string', 'max' => 2],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_user' => 'Id User',
            'post_index' => 'Post Index',
            'country_code' => 'Country Code',
            'town' => 'Town',
            'street' => 'Street',
            'num_build' => 'Num Build',
            'num_office' => 'Num Office',
        ];
    }
}
