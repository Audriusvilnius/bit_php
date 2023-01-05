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
        (new FR('customers'))->create($_POST);
        return App::redirect('customers');
    }

    public function edit($id)
    {
        $pageTitle = 'customer | Redaguoti';
        $customers = (new FR('customers'))->show($id);
        return App::view('customer-edit', compact('pageTitle', 'customer'));
    }

    public function update($id)
    {
        (new FR('customers'))->update($id, $_POST);
        return App::redirect('customer');
    }

    public function delete($id)
    {
        (new FR('customers'))->delete($id);
        return App::redirect('customers');
    }
    public function add($id)
    {
        (new FR('customers'))->add($id);
        return App::view('customer-add', compact('pageTitle', 'customer'));
    }
}