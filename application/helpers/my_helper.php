<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if (!function_exists('my_print_r')) {

    function my_print_r($data) {

        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }

}
