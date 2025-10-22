<?php
namespace App\Controllers;

use App\Models\User;

class UsersController
{
    public function index()
    {
        $users = User::all();
        include __DIR__ . '/../../views/users/index.php';
    }

    public function create()
    {
        include __DIR__ . '/../../views/users/create.php';
    }

    public function store()
    {
        // Väldi header viga – ära väljasta midagi enne seda
        ob_start();

        $user = new User();
        $user->email = $_POST['email'];
        $user->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $user->save();

        ob_end_clean();
        header('Location: /users');
        exit;
    }

    public function edit()
    {
        $id = $_GET['id'] ?? null;
        if (!$id) {
            header('Location: /users');
            exit;
        }

        $user = User::find($id);
        include __DIR__ . '/../../views/users/edit.php';
    }

    public function update()
    {
        ob_start();

        $id = $_POST['id'];
        $user = User::find($id);
        $user->email = $_POST['email'];
        if (!empty($_POST['password'])) {
            $user->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        }
        $user->save();

        ob_end_clean();
        header('Location: /users');
        exit;
    }

    public function destroy()
    {
        ob_start();

        $id = $_POST['id'];
        $user = User::find($id);
        if ($user) {
            $user->delete();
        }

        ob_end_clean();
        header('Location: /users');
        exit;
    }
}
