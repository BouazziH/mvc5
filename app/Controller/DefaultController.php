<?php

namespace App\Controller;

use App\Weblitzer\Controller;

/**
 *
 */
class DefaultController extends Controller
{

    public function index()
    {
        $message = 'Bienvenue sur le framework MVC';

        $this->render('app.default.frontpage',array(
            'message' => $message,
        ));
    }

    public function methContact()
    {
        $message = 'Bienvenue sur contact';
        $this->render('app.default.frontpage',array(
            'message' => $message,
        ));
    }
    public function methTry()
    {
        $message = 'Just to try !!!';
        $this->render('app.default.frontpage',array(
            'message' => $message,
        ));
    }
    /**
     *
     */
    public function Page404()
    {
        $this->render('app.default.404');
    }

}