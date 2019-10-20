<?php

class Config
{
    /**
     * @param null $path
     * @return bool|mixed
     */
    public static function get($path = null)
    {
        if ($path) {
            $config = $GLOBALS['config'];
            $path = explode('/', $path);
            foreach ($path as $elem) {
                if (isset($config[$elem])) {
                    $config = $config[$elem];
                }
            }
            return $config;
        }
        return false;
    }
}
