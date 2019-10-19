<?php

require_once 'core/init.php';

if (Session::exists('register')) {
    echo '<p>' . Session::flash('register') . '</p>';
}
