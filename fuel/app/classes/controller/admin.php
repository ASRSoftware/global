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
class Controller_Admin extends Controller {

    /**
     * The basic welcome message
     *
     * @access  public
     * @return  Response
     */
    public function action_index() {

        $view = View::forge('layout/admin/dashboard');
        $view->header = View::forge('layout/admin/header');
        $view->nav = View::forge('layout/admin/nav');
        $view->footer = View::forge('layout/admin/footer');        
        return $view;
    }

     /**
     * The basic welcome message
     *
     * @access  public
     * @return  Response
     */
    public function action_addproperty() {

        if(Input::method()=='POST'){
           
        }
        $view = View::forge('admin/addproperty');
        $view->header = View::forge('layout/admin/header');
        $view->nav = View::forge('layout/admin/nav');
        $view->footer = View::forge('layout/admin/footer');        
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
