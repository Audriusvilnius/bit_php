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
        if ($userData['name'] != '' && $userData['surname'] != '' && $userData['personal_id']) {
    if (!preg_match('/\D([A-Za-z]{2})/', $_POST['name']) || preg_match('/\d/', $_POST['name'])) {
        header('Location: http://localhost/bit_php/bankas_ver_1/userdatach.php?name=' . $_POST['name']);
    } else {
        $name = $userData['name'];
        if (!preg_match('/\D([A-Za-z]{2})/', $_POST['surname']) || preg_match('/\d/', $_POST['surname'])) {
            header('Location: http://localhost/bit_php/bankas_ver_1/userdatach.php?surname=' . $_POST['surname']);
        } else {
            $surname = $userData['surname'];
            if (!preg_match('/^([1-6]{1})([0-9]{2})([0-1]{1})([0-2]{1})([0-3]{1})([0-9]{1})([0-9999]{4})$/', $_POST['personal_id'])) {
                header('Location: http://localhost/bit_php/bankas_ver_1/userdatach.php?id=' . $_POST['personal_id']);
            } else {
                $id = $userData['id'];
                $balance = 0;
                $account = 'LT' . rand(10, 99) . '6300' . rand(10000000000, 99999999999);
                // foreach ($userData as $i => $new) {
                //     if ($userData[$i]['personal_id'] == $_POST['personal_id']) {
                //         $new = $data_ba[$i]['code'];
                //         $surname = $data_ba[$i]['surname'];
                //         $name = $data_ba[$i]['name'];
                //         $code = $new;
                //         break;
                //     } else {
                //         $temp = rand(1000000, 10000000);
                //         $code = $temp;
                //     }
                // }
                $data[] = ['id' => $code, 'account' => $account, 'balance' => $balance, 'name' => $name, 'surname' => $surname, 'personal_id' => $id];
                //$_SESSION['date'] = $data;
                $this->data[] = $data;
                
                //file_put_contents(__DIR__ . '/data', serialize($newData));
                //header('Location: http://localhost/bit_php/bankas_ver_1/new.php');
                //die;
            }
        }
    }
}






        //$this->data[] = $userData;
    }

    public function update(int $userId, array $userData): void
    {
        $userData['id'] = $userId;
        $this->data = array_map(fn ($data) => $userId == $data['id'] ? $userData : $data, $this->data);
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

    public function showAll(): array
    {
        return $this->data;
    }
}