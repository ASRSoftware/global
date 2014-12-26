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

        if (Input::method() == 'POST') {
            // $object = new Model_CommonFunction();
            $property_master = array(
                'user_id' => '1',
                'property_name' => Input::post('property_name'),
                'property_address' => Input::post('property_address'),
                'property_desc' => Input::post('property_desc'),
                'property_price' => Input::post('property_price'),
                'area' => Input::post('area'),
                'bedrooms' => Input::post('bedrooms'),
                'bathrooms' => Input::post('bathrooms'),
                'floorno' => Input::post('floorno'),
                'balconies' => Input::post('balconies'),
                'location' => Input::post('location'),
                'create_date' => date('d-m-Y'),
            );
            $property_feature = array(
                'property_id' => '1',
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
            $property_distance = array(
                'property_id' => '1',
                'hospital_dis' => Input::post('hospital_dis'),
                'school_dis' => Input::post('school_dis'),
                'railway_dis' => Input::post('railway_dis'),
                'airport_dis' => Input::post('airport_dis'),
                'city_center' => Input::post('city_center'),
                'bus_depot' => Input::post('bus_depot'),
                'create_date' => date('d-m-Y'),
            );
            $property_contact = array(
                'property_id' => '1',
                'hospital_dis' => Input::post('hospital_dis'),
                'school_dis' => Input::post('school_dis'),
                'create_date' => date('d-m-Y'),
            );
            print_r($property_feature);
//                $is_id[0]
            //$is_id = $object->insertData('baunglow_master', $inarray);
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
