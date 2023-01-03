<?php

namespace Bankas2\Controllers;

use Bankas2\App;
use Bankas2\DB\FileReader as FR;
        
        

class Customer
{

    public function index()
    {
        $customers = (new FR('customers'))->showAll();
        $pageTitle = 'Customers | List';
        return App::view('customer-list', compact('customers', 'pageTitle'));
    }

    public function create()
    {
        $pageTitle = 'customer | Naujas';
        return App::view('customer-create', compact('pageTitle'));
    }

    public function save()
    {
        (new FR('customer'))->create($_POST);
        return App::redirect('grybai');
    }

    public function edit($id)
    {
        $pageTitle = 'customer | Redaguoti';
        $grybas = (new FR('customer'))->show($id);
        return App::view('customer-edit', compact('pageTitle', 'grybas'));
    }

    public function update($id)
    {
        (new FR('customer'))->update($id, $_POST);
        return App::redirect('customer');
    }

    public function delete($id)
    {
        (new FR('customer'))->delete($id);
        return App::redirect('customer');
    }
}