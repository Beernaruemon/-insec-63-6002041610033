<?php

namespace backend\models;

class AuthAssignment extends \common\models\AuthAssignment
{
    public function getuserName(){
        return $this->hasOne(User::class, ['id'=>'user_id']);
    }
    public function attributeLabels()
    {
        return array_merge(parent::attributeLabels(),
            [
                'item_name' => 'Role',
                'user_id' => 'Username'
            ]);
                  
        /*return [
            'item_name' => 'Item Name',
            'user_id' => 'User ID',
            'created_at' => 'Created At',
        ];*/
    }
}