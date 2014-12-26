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
class Controller_User extends Controller {

    /**
     * The basic welcome message
     *
     * @access  public
     * @return  Response
     */
    public function action_index() {
        
    }

    /*
     * login check
     */

    public function action_logincheck() {
        Auth::logout();
        Respose::redirect('/');
    }

    /**
     * The Logout
     *
     * @access  public
     * @return  Response
     */
    public function action_logout() {
        Auth::logout();
        \Fuel\Core\Response::redirect('/');
    }

    /**
     * login pannel
     */
    public function action_login() {

        if (Auth::login(Input::post('user_txt'), Input::post('password_txt'))) {
            return 1;
        } else {
            return 0;
        }
    }

    /**
     * Sign up
     */
    public function action_signup() {
        $val = Validation::forge('signup_valid');
        $val->add('gl-name', 'name')
                ->add_rule('required');
        $val->add('gl-password', 'password')
                ->add_rule('required');
        $val->add('gl-email', 'your email id')
                ->add_rule('required')->add_rule('valid_email');
//            $val->add('signup-mobileno', 'mobile number')
//                    ->add_rule('required')->add_rule('match_pattern', '`^[7-9][0-9]{9}$`i');

        $val->set_message('required', 'A valid :label is required');
        $val->set_message('valid_email', 'Invalid email address');
        //$val->set_message('match_pattern', 'Invalid phone number');
        if ($val->run()) {
            if (Auth::create_user(Input::post('gl-name'), Input::post('gl-password'), Input::post('gl-email'), $group = 1, $profile_fields = array('mobile_no' => '9850950086'))) {
                $arrayname = array('status' => true);
                return json_encode($arrayname);
            } else {
                $arrayname = array('status' => false);
                return json_encode($arrayname);
            }
        } else {
            $arrayname = array('status' => false,
                'validation' => $subarray = array(
            'name' => $val->error('gl-name') ? $val->error('gl-name')->get_message() : null,
            'password' => $val->error('gl-password') ? $val->error('gl-password')->get_message() : null,
            'email' => $val->error('gl-email') ? $val->error('gl-email')->get_message() : null,
            ));
            return json_encode($arrayname);
        }
    }

}
