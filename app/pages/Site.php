<?php

//namespace App\Pages;

namespace pages;

class Site
{
    private $f3;

    public function __construct()
    {
        global $f3;
        $this->f3 = $f3;
    }

    public function home()
    {
        $this->f3->set('page_title', 'Homepage');
        echo \View::instance()->render('home.php');
    }

    public function about()
    {
        $this->f3->set('page_title', 'About');
        echo \View::instance()->render('about.php');
    }

    public function contact()
    {
        $this->f3->set('page_title', 'Contact');
        echo \View::instance()->render('contact.php');
    }

    public function customers()
    {
        $customers = $this->f3->get('db')->exec("SELECT * FROM customers");
        $this->f3->set('customers', $customers);
        $this->f3->set('page_title', 'Customers');
        echo \View::instance()->render('customers.php');
    }

    public function send()
    {
        if (isset($_POST['name'], $_POST['email'], $_POST['message'])) {
            $name = htmlentities($_POST['name']);
            $email = htmlentities($_POST['email']);
            $message = htmlentities($_POST['message']);

            $response = [
                'success' => 'Email sent successfully.',
                'data' => ['name' => $name, 'email' => $email, 'message' => $message],
            ];

            echo json_encode($response);
        }
    }

    public function route1()
    {
        echo 'Route 1';
    }

    public function route2()
    {
        echo 'Route 2';
    }
}
