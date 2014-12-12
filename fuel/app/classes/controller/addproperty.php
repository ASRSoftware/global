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
class Controller_Addproperty extends Controller {

    /**
     * The basic welcome message
     *
     * @access  public
     * @return  Response
     */
    public function action_index() {
          if (Input::method() == 'POST') {
            
            $object = new Model_CommonFunction();
            $property_master = array(
                'user_id' => '5',
                'property_name' => Input::post('property_name'),
                'property_address' => Input::post('property_address'),
                'property_desc' => Input::post('property_desc'),
                'property_price' => Input::post('property_price'),
                'area' => Input::post('area'),
                'bedrooms' => Input::post('bedrooms'),
                'bathrooms' => Input::post('bathrooms'),
                'property_mode' => Input::post('property_mode'),
                'property_type' => Input::post('property_type'),
                'balconies' => Input::post('balconies'),
                //'location' => Input::post('location'),
                'create_date' => date('d-m-Y'),
            );
           $master_id= $object->insertData('property_master', $property_master);
            $property_feature = array(
                'property_id' => $master_id[0],
                'in_vastu' => Input::post('in_vastu'),
                'in_intercom' => Input::post('in_intercom'),
                'ex_gym' => Input::post('ex_gym'),
                'ex_security' => Input::post('ex_security'),
                'ex_swimming' => Input::post('ex_swimming'),
                'ex_lift' => Input::post('ex_lift'),
                'ex_parking' => Input::post('ex_parking'),
                'ex_powerbackup' => Input::post('ex_powerbackup'),
                'create_date' => date('d-m-Y'),
            );
             $object->insertData('property_features', $property_feature);
            
            $property_distance = array(
                'property_id' => $master_id[0],
                'hospital_dis' => Input::post('hospital_dis'),
                'school_dis' => Input::post('school_dis'),
                'railway_dis' => Input::post('railway_dis'),
                'airport_dis' => Input::post('airport_dis'),
                'city_center' => Input::post('city_center'),
                'bus_depot' => Input::post('bus_depot'),
                'create_date' => date('d-m-Y'),
            );
            $object->insertData('property_distance', $property_distance);
            
            
            
            $property_contact = array(
                'property_id' => $master_id[0],
                'contact_name' => Input::post('contact_name'),
                'contact_no' => Input::post('contact_no'),
                'create_date' => date('d-m-Y'),
            );
              $object->insertData('property_contact', $property_contact);
        $view = View::forge('layout/about');
        $view->headerscript = View::forge('layout/headerscript');
        $view->slider = View::forge('layout/slider');
        $view->nav = View::forge('layout/nav');
        $view->topnav = View::forge('layout/topnav');
        $view->rightbar = View::forge('layout/rightbar');
        $view->contain = View::forge('addproperty/index');
        $view->footerscript = View::forge('layout/footerscript');
        $view->footer = View::forge('layout/footer');
        return $view;

    } 
    else{
         $view = View::forge('layout/about');
        $view->headerscript = View::forge('layout/headerscript');
        $view->slider = View::forge('layout/slider');
        $view->nav = View::forge('layout/nav');
        $view->topnav = View::forge('layout/topnav');
        $view->rightbar = View::forge('layout/rightbar');
        $view->contain = View::forge('addproperty/index');
        $view->footerscript = View::forge('layout/footerscript');
        $view->footer = View::forge('layout/footer');
        return $view;
    }
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
