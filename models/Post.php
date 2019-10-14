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
            [['post_index', 'country_code', 'town', 'street', 'num_build','num_office'], 'required','message' => 'Заполните поле.'],
            [['town', 'street', 'num_build', 'num_office'], 'string', 'max' => 255],
            [['country_code'], 'string', 'max' => 2],
            [['post_index'], 'integer', 'message' => 'Почтовый индекс, целые числа'],
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
            'post_index' => 'Почтовый индекс',
            'country_code' => 'код страны',
            'town' => 'Город',
            'street' => 'Улица',
            'num_build' => 'Номер дома',
            'num_office' => 'Номер офиса',
        ];
    }

    public function setIdUser($userId){
        $this->id_user = $userId;
    }


}
