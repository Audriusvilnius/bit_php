<?php

namespace Bankas2\Controllers;

use Bankas2\App;
use Bankas2\DB\FileReader as FR;

class Bankas
{

    public function index()
    {
        $grybai = (new FR('grybai'))->showAll();
        $pageTitle = 'Klientu | Sąrašas';
        return App::view('grybas-list', compact('grybai', 'pageTitle'));
    }

    public function create()
    {
        $pageTitle = 'Grybai | Naujas';
        return App::view('grybas-create', compact('pageTitle'));
    }

    public function save()
    {
        (new FR('grybai'))->create($_POST);
        return App::redirect('grybai');
    }

    public function edit($id)
    {
        $pageTitle = 'Grybai | Redaguoti';
        $grybas = (new FR('grybai'))->show($id);
        return App::view('grybas-edit', compact('pageTitle', 'grybas'));
    }

    public function update($id)
    {
        (new FR('grybai'))->update($id, $_POST);
        return App::redirect('grybai');
    }

    public function delete($id)
    {
        (new FR('grybai'))->delete($id);
        return App::redirect('grybai');
    }
}