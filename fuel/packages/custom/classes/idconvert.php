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

class idconvert
{
    public static function get_property_mode($id){
       $value = \Model_CommonFunction::get_data(array('table'=>'property_mode','where'=>'mode_id','value'=>$id), 
                array('mode_name'));
        return  $value[0]['mode_name'];
    }
    
    public static function get_property_type($id){
       $value = \Model_CommonFunction::get_data(array('table'=>'property_type','where'=>'type_id','value'=>$id), 
                array('type_name'));
        return  $value[0]['type_name'];
    }
}

/* end of file auth.php */
