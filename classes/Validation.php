<?php

class Validation
{
    public static $loginValidation = array(
        'email' => array(
            'required' => true,
        ),
        'password' => array(
            'required' => true,
        )
    );

    public static $signupValidation = array(
        'signup-name' => array(
            'required' => true,
            'min' => 4,
            'max' => 64,
        ),
        'signup-email' => array(
            'required' => true,
            'min' => 4,
            'max' => 30
        ),
        'signup-password' => array(
            'required' => true,
            'min' => 6
        )
    );
    private
        $_passed = false,
        $_errors = array(),
        $_db = null;

    public function __construct()
    {
        $this->_db = DB::getInstance();
    }

    public function check($source, $items = array())
    {
        foreach ($items as $item => $rules) {
            foreach ($rules as $rule => $rule_value) {

                $value = $source[$item];
                if ($rule === 'required' && empty($value)) {
                    $this->addError("{$item} is required");
                } else if (!empty($value)) {
                    switch ($rule) {
                        case 'min':
                            if (strlen($value) < $rule_value) {
                                $this->addError("{$item} must be a at least {$rule_value} long");
                            }
                            break;
                        case 'max':
                            if (strlen($value) > $rule_value) {
                                $this->addError("{$item} mustn't be longer than {$rule_value}");
                            }
                            break;
                    }
                }
            }
        }

        if (empty($this->_errors)) {
            $this->_passed = true;
        }
        return $this;
    }

    public function addError($error)
    {
        $this->_errors[] = $error;
    }

    public function errorList()
    {
        return $this->_errors;
    }

    public function passed()
    {
        return $this->_passed;
    }

    public static function signupValidationPassed()
    {
        $user = new User();
        $salt = Hash::salt(32);
        try {
            $user->create(array(
                'name' => Input::get('signup-name'),
                'password' => Hash::make(Input::get('signup-password') . $salt),
                'salt' => $salt,
                'email' => Input::get('signup-email'),
                'joined' => date('Y-m-d H-i-s'),
                'group' => 1
            ));
            Session::flash('register', 'You have been registered successfully!');
            Redirect::to('register.php');
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public static function loginValidationPassed()
    {
        $user = new User();
        $login = $user->login(Input::get('email'), Input::get('password'));
        if ($login) {
            Session::flash('login', 'You have logged in!');
            Redirect::to('login.php');
        } else {
            echo 'Fail';
        }
    }

}
