<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use Model\Mstmaker;

class Controller_Makerlist extends Controller
{
	/**
	 * The basic welcome message
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_index()
	{
            $data['makers'] = Mstmaker::get_all();
            return Response::forge(View::forge('makerlist', $data));
	}
 }
 