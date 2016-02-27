<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Model;

class Mstmaker extends \Model  {
    public static function get_all()
    {
        $results = \DB::query('SELECT * FROM mst_maker')->execute();
        return $results->as_array();
    }
}