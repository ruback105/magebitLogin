<?php

class Validation
{
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
                            if(strlen($value) < $rule_value) {
                                $this->addError("{$item} must be a at least {$rule_value} long");
                            }
                            break;
                        case 'max':
                            if(strlen($value) > $rule_value) {
                                $this->addError("{$item} mustn't be longer than {$rule_value}");
                            }
                            break;
                        case 'unique':
                            $check = $this->_db->get($rule_value, array($item, '=', $value));
                            if ($check->count()) {
                                $this->addError("{$item} already exists.");
                            }
                            break;
                        default:


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
}
