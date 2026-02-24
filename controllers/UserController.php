<?php
require_once "models/User.php";

class UserController {
    private $user;
// test change - pipeline check
    public function __construct($db) {
        $this->user = new User($db);
    }

    public function index() {
        $users = $this->user->getAll();
        include "views/users/list.php";
    }

    public function create() {
        include "views/users/create.php";
    }

   
public function store() {
    if ($_POST) {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);

        if (empty($name) || empty($email)) {
            $error = "All fields are required!";
            include "views/users/create.php";
            return;
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = "Invalid email format!";
            include "views/users/create.php";
            return;
        }

        $this->user->create($name, $email);
        header("Location: index.php");
    }
}

public function update($data) {
    $id = $data['id'];
    $name = trim($data['name']);
    $email = trim($data['email']);

    if (empty($name) || empty($email)) {
        $error = "All fields are required!";
        $user = ['id'=>$id, 'name'=>$name, 'email'=>$email];
        include "views/users/edit.php";
        return;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email format!";
        $user = ['id'=>$id, 'name'=>$name, 'email'=>$email];
        include "views/users/edit.php";
        return;
    }

    $this->user->update($id, $name, $email);
    header("Location: index.php");
}


    public function edit($id) {
        $user = $this->user->getById($id);
        include "views/users/edit.php";
    }

   

    public function delete($id) {
        if (!empty($id)) {
            $this->user->delete($id);
        }
        header("Location: index.php");
    }
}
?>

