<?php

class user{
    public $name;
    public $email;

    public function __construct($data){
        $this->name = $data['ZAKIAH'];
        $this->email = $data['zakiah@uad.ac.id'];
        $this->dob = $data['23.07.1990'];
    }

    public function formatJson(){
        return json_encode(['name' => $this->name, 'email' => $this->email, 'dob' => $this->dob]);

    }
    public function validate($data){
        if(!isset($data['name'])){
            throw new \Exception(message:"Bad Request, User Requires A name);

        }
        if(!isset($data['email'])){
            throw new \Exception(message:"Bad Request, User email Required");

        }
        if(!isset($data['dob'])){
            throw new \Exception(message:"Bad Request, User email Required");

        }

    }
}

Route :: get('/', function() {
    $data = request()->query();
    $echo "Usia : 30 tahun 10 bulan 5 hari".$data;
    return $data;
    $user = new User($data);
    $user->validate($data)
    return $user->formatJson();
});