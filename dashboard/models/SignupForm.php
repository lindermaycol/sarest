<?php
namespace dashboard\models;

use yii\base\Model;
use common\models\User;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $USERNAME;
    public $EMAIL;
    public $PASSWORD;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['USERNAME', 'trim'],
            ['USERNAME', 'required'],
            ['USERNAME', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['USERNAME', 'string', 'min' => 2, 'max' => 255],

            ['EMAIL', 'trim'],
            ['EMAIL', 'required'],
            ['EMAIL', 'email'],
            ['EMAIL', 'string', 'max' => 255],
            ['EMAIL', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

            ['PASSWORD', 'required'],
            ['PASSWORD', 'string', 'min' => 6],
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $user = new User();
        $user->USERNAME = $this->USERNAME;
        $user->EMAIL = $this->EMAIL;
        $user->setPassword($this->PASSWORD);
        $user->generateAuthKey();
        
        return $user->save() ? $user : null;
    }
}
