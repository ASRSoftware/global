<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Controller_Search extends Controller {

    /**
     * The basic welcome message
     *
     * @access  public
     * @return  Response
     */
    public function action_index() {
        
        $where =array('location'=>'1','property_type'=>'1','bedrooms'=>'3');
        $data = Model_CommonFunction::search(array('table' => 'property_master'),$where);
        $dataarray = array('datalist' => $data);

        $view = View::forge('layout/propertylayout');
        $view->headerscript = View::forge('layout/headerscript');
        $view->slider = View::forge('layout/slider');
        $view->nav = View::forge('layout/nav');
        $view->topnav = View::forge('layout/topnav');
        $view->rightbar = View::forge('layout/rightbar');
        $view->contain = View::forge('sellrent/propertycontain', $dataarray);
        $view->footerscript = View::forge('layout/footerscript');
        $view->footer = View::forge('layout/footer');
        return $view;
    }

}
