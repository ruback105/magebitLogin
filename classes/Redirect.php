<?php

class Redirect
{
    /**
     * @param $location
     *
     */
    public static function to($location)
    {
        if ($location) {
            header('Location: ' . $location);
            exit();
        }
    }
}
