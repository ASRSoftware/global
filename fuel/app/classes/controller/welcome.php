<?php

class Controller_Welcome extends Controller {

    public function action_index() {

        if (Auth::check()) {
            // Credentials ok, go right in.
            list($driver, $userid) = Auth::get_user_id();
            $email = Auth::get_email();
            $screen = Auth::get_screen_name();
        }
        $data = Model_CommonFunction::search2(array('table' => 'property_master'));
        $dataarray = array('listdata' => $data);

        $view = View::forge('layout/home');
        $view->headerscript = View::forge('layout/headerscript');
        $view->slider = View::forge('layout/slider');
        $view->nav = View::forge('layout/nav');
        $authvar = View::forge('layout/topnav');
        $authvar->state = true;
        $authvar->username = true;
        $view->topnav = View::forge('layout/topnav');
        $view->searchBar = View::forge('layout/searchBar');
        $view->rightbar = View::forge('layout/rightbar');
        $view->propertylist2 = View::forge('welcome/propertylist2', $dataarray);
        $view->footerscript = View::forge('layout/footerscript');
        $view->footer = View::forge('layout/footer');
        return $view;
    }

    public function action_about() {
        $view = View::forge('layout/about');
        $view->headerscript = View::forge('layout/headerscript');
        $view->slider = View::forge('layout/slider');
        $view->nav = View::forge('layout/nav');
        $view->topnav = View::forge('layout/topnav');
        $view->rightbar = View::forge('layout/rightbar');
        $view->contain = View::forge('about/aboutcontain');
        $view->footerscript = View::forge('layout/footerscript');
        $view->footer = View::forge('layout/footer');
        return $view;
    }

    public function action_playout() {

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

    public function action_slayout() {
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

    public function action_addproperty() {
        $view = View::forge('layout/about');
        $view->headerscript = View::forge('layout/headerscript');
        $view->slider = View::forge('layout/slider');
        $view->nav = View::forge('layout/nav');
        $view->topnav = View::forge('layout/topnav');
        $view->rightbar = View::forge('layout/rightbar');
        $view->contain = View::forge('about/aboutcontain');
        $view->footerscript = View::forge('layout/footerscript');
        $view->footer = View::forge('layout/footer');
        return $view;
    }

    public function action_slistlayout() {
        $view = View::forge('layout/singlepropertylist');
        $view->headerscript = View::forge('layout/headerscript');
        $view->slider = View::forge('layout/slider');
        $view->nav = View::forge('layout/nav');
        $view->topnav = View::forge('layout/topnav');
        $view->rightbar = View::forge('layout/rightbar');
        $view->contain = View::forge('singlelist/singlepropertylistcontain');
        $view->footerscript = View::forge('layout/footerscript');
        $view->footer = View::forge('layout/footer');
        return $view;
    }


    public function action_contact() {
        $view = View::forge('layout/contactlayout');
        $view->headerscript = View::forge('layout/headerscript');
        $view->slider = View::forge('layout/slider');
        $view->nav = View::forge('layout/nav');
        $view->topnav = View::forge('layout/topnav');
        $view->rightbar = View::forge('layout/rightbar');
        $view->contain = View::forge('contact/contactcontain');
        $view->footerscript = View::forge('layout/footerscript');
        $view->footer = View::forge('layout/footer');
        return $view;
    }

    public function action_dashboard() {
        $view = View::Forge('layout/dashboard');
        $view->headerscript = View::Forge('layout/headerscript');
        $view->nav = View::Forge('layout/nav');
        $view->userdetails = View::Forge('dashboard/userdetails');
        $view->contain = View::Forge('dashboard/maincontainer');
        $view->footerscript = View::Forge('layout/footerscript');
        $view->footer = View::Forge('layout/footer');
        return $view;
    }


    public function action_404() {

        $view = View::forge('layout/about');
        $view->headerscript = View::forge('layout/headerscript');
        $view->slider = View::forge('layout/slider');
        $view->nav = View::forge('layout/nav');
        $view->topnav = View::forge('layout/topnav');
        $view->rightbar = View::forge('layout/rightbar');
        $view->contain = View::forge('layout/404');
        $view->footerscript = View::forge('layout/footerscript');
        $view->footer = View::forge('layout/footer');
        return $view;
    }

}
