<?php
        
namespace Bankas2\DB;

use App\DB\DataBase;

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
        $account = 'LT ' . rand(10, 99) . ' 6300 ' . rand(1000, 9999).' '. rand(1000, 9999).' '. rand(1000, 9999);
        $userData['account']=$account;
        $userData['balance']=$balance;
        $this->data[] = $userData;
    }

    public function update(int $userId, array $userData): void
    {
        $userData['id'] = $userId;
        $this->data = array_map(fn ($data) => $userId == $data['id'] ? $userData : $data, $this->data);

    }
    public function plius(int $id, array $userData): void
    {
    //  print_r($this->data);
    // print_r($userData);

    //   echo('fsfs');
        foreach ($this->data as $index => $us_data) {
            if($id == $us_data['id']){
                // print_r($this->data[$index]['balance']);
                // echo('dsff');
                //    print_r($this->data);
                 $this->data[$index]['balance']+=$userData['pinigai'];
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