<?php

/**
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package    Fuel
 * @version    1.5
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2013 Fuel Development Team
 * @link       http://fuelphp.com
 */

/**
 * The Welcome Controller.
 *
 * A basic controller example.  Has examples of how to set the
 * response body and status.
 *
 * @package  app
 * @extends  Controller
 */
class Controller_Propertylist extends Controller {

    /**
     * The basic welcome message
     *
     * @access  public
     * @return  Response
     */
    public function action_index() {

        $data = Model_CommonFunction::search(array('table' => 'property_master'));
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

    /**
     * A typical "Hello, Bob!" type example.  This uses a ViewModel to
     * show how to use them.
     *
     * @access  public
     * @return  Response
     */
    public function action_view() {
        $data1 = Model_CommonFunction::get_data(array('table' => 'property_master', 'where' => 'property_id', 'value' => '1'));
        $data2 = Model_CommonFunction::get_data(array('table' => 'property_features', 'where' => 'property_id', 'value' => '1'));
        $data3 = Model_CommonFunction::get_data(array('table' => 'property_distance', 'where' => 'property_id', 'value' => '1'));
        $dataarray = array('datalist' => $data1, 'datafeature' => $data2, 'datadistance' => $data3);

        $view = View::forge('layout/singleproperty');
        $view->headerscript = View::forge('layout/headerscript');
        $view->slider = View::forge('layout/slider');
        $view->nav = View::forge('layout/nav');
        $view->topnav = View::forge('layout/topnav');
        $view->rightbar = View::forge('layout/rightbar');
        $view->contain = View::forge('singleview/singlepropertycontain', $dataarray);
        $view->footerscript = View::forge('layout/footerscript');
        $view->footer = View::forge('layout/footer');
        return $view;
    }

    /**
     * The 404 action for the application.
     *
     * @access  public
     * @return  Response
     */
    public function action_404() {
        return 'asdf';
    }

}
