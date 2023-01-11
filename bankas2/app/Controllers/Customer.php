<?php

namespace Bankas2\Controllers;

use Bankas2\App;
use Bankas2\DB\FileReader as FR;
use Bankas2\Message as MS;
use Bankas2\Valid as V;
        
        

class Customer
{

    public function index()
    {
        $customers = (new FR('customers'))->showAll();
        $pageTitle = 'R&K | Customers List';
        $message = MS::get();
        return App::view('customer-list', compact('customers', 'pageTitle', 'message'));
    }

    public function create()
    {
        $pageTitle = 'R&K | New Account';
        return App::view('customer-create', compact('pageTitle'));
    }

    public function save()
    {
        $test = $_POST;
        //MS::add('Mesage','ok');
        $test = V::check_id($test);
        (new FR('customers'))->create($test);
        return App::redirect('customers');
    }

    public function edit($id)
    {
        $pageTitle = 'R&K | Edit';
        $customers = (new FR('customers'))->show($id);
        return App::view('customer-edit', compact('pageTitle', 'customers','message'));
    }
    public function transfer($id)
    {
        $pageTitle = 'R&K | Transfer';
        //$message = MS::get();
        $customers = (new FR('customers'))->show($id);
        return App::view('customer-transfer', compact('pageTitle', 'customers','message'));
    }

    public function update($id)
    {
        (new FR('customers'))->update($id, $_POST);
        return App::redirect('customers');
    }
    public function plius($id)
    {  
        (new FR('customers'))->plius($id, $_POST);
        //MS::add('Mesage','ok');
        return App::redirect('customers/transfer/' . $id); 
    }

    public function delete($id)
    {
        (new FR('customers'))->delete($id);
        //MS::add('Mesage','ok');
        return App::redirect('customers');
    }
    public function add($id)
    {
        (new FR('customers'))->add($id);
        return App::view('customer-add', compact('pageTitle', 'customer'));
    }
       public function home()
    {
        $pageTitle = 'R&K | Home';
        return App::view('customer-home', compact('pageTitle', 'customer'));
    }
     public function error($error)
    {
        $pageTitle = 'R&K | Error';
        $customers['error']=$error;
        return App::view('customer-error', compact('pageTitle', 'customers'));
        
    }
}