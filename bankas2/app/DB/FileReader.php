<?php
        
namespace Bankas2\DB;

use App\DB\DataBase;
use Bankas2\Controllers;
use Bankas2\App;

class FileReader implements DataBase
{

    private $data, $name;


    public function __construct($name)
    {
        $this->name = $name;
        if (!file_exists(__DIR__ . '/' . $this->name)) {
            $this->data = [];
        } else {
            $this->data = unserialize(file_get_contents(__DIR__ . '/' . $this->name));
        }
    }

    public function __destruct()
    {
        file_put_contents(__DIR__ . '/' . $this->name, serialize($this->data));
    }
    public function __get($get){
        return $this->get;
    }


    private function getId(): int
    {
        if (!file_exists(__DIR__ . '/' . $this->name . '_id')) {
            file_put_contents(__DIR__ . '/' . $this->name . '_id', serialize(1));
            return 1;
        } else {
            $id = unserialize(file_get_contents(__DIR__ . '/' . $this->name . '_id'));
            $id++;
            file_put_contents(__DIR__ . '/' . $this->name . '_id', serialize($id));
            return $id;
        }
    }

    public function create(array $userData): void
    {
        $userData['id'] = $this->getId();
        $balance = 0;
        $error=0;
        $cust_id;
        $account = 'LT ' . rand(10, 99) . ' 6300 ' . rand(1000, 9999).' '. rand(1000, 9999).' '. rand(1000, 9999);
        $userData['account']=$account;
        (float)$userData['balance']=$balance;
        $userData['cust_id']=$userData['id'];

      
        
        // foreach ($this->data as $key => $value) {
        //     if ($userData['personal_id'] == $value['personal_id']){
        //         $userData['error']=1;
        //         App::redirect('customers/error/' .$userData['id']); 
        //     }
        // }
        $this->data[] = $userData;
   
    }

    public function update(int $userId, array $userData): void
    {
        $userData['id'] = $userId;
        $this->data = array_map(fn ($data) => $userId == $data['id'] ? $userData : $data, $this->data);

    }
    public function plius(int $id, array $userData): void
    {
        if ($userData['plius']){
            foreach ($this->data as $index => $us_data) {
                if($id == $us_data['id'] && is_numeric($userData['plius'] )&& $userData['plius'] > 0){                
                $userData['plius'] = round($userData['plius'],2);
                (float)$this->data[$index]['balance']+=$userData['plius'];
                }
            }
        }
        if ($userData['minus']){
            foreach ($this->data as $index => $us_data) {
                if($id == $us_data['id'] && is_numeric($userData['minus'] )&& $userData['minus'] > 0 && ($this->data[$index]['balance'] - $userData['minus'])>=0 ){                
                $userData['minus'] = round($userData['minus'],2);
                $this->data[$index]['balance']-=$userData['minus'];
                }
            }
        }
    }

    public function delete(int $userId): void
    {
        $this->data = array_filter($this->data, fn ($data) => $userId != $data['id']);
    }

    public function show(int $userId): array
    {
        foreach ($this->data as $data) {
            if ($userId == $data['id']) {
                return $data;
            }
        }
        return [];
    }
    public function search(string $name): array
    {
        foreach ($this->data as $data) {
            if ($name == $data['name']) {
                return $data;
            }
        }
        return [];
    }

    public function showAll(): array
    {
        return $this->data;
    }

}