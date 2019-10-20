<?php

class Hash
{
    /**
     * @param $string
     * @param string $salt
     * @return string
     */
    public static function make($string, $salt = '')
    {
        return hash('sha256', $string . $salt);
    }

    /**
     * @param $length
     * @return string
     */
    public static function salt($length)
    {
        $characterList = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*?";
        $i = 0;
        $salt = "";
        while ($i < $length) {
            $salt .= $characterList{mt_rand(0, (strlen($characterList) - 1))};
            $i++;
        }
        return $salt;
    }

}
