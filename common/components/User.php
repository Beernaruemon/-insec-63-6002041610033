<?php
namespace common\components;
class User extends \yii\web\User
{
    public $identityClass = '\common\models\User';
}