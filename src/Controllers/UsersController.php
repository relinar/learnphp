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
        // avoid header already sent issues
        ob_start();

        $user = new User();
        $user->email = $_POST['email'] ?? null;
        $user->password = password_hash($_POST['password'] ?? '', PASSWORD_DEFAULT);
        $user->save();

        ob_end_clean();
        header('Location: /users');
        exit;
    }

    public function view()
    {
        $id = $_GET['id'] ?? null;
        if (!$id) {
            header('Location: /users');
            exit;
        }

        $user = User::find($id);
        include __DIR__ . '/../../views/users/view.php';
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

        $id = $_POST['id'] ?? $_GET['id'] ?? null;
        if (!$id) {
            ob_end_clean();
            header('Location: /users');
            exit;
        }

        $user = User::find($id);
        if (!$user) {
            ob_end_clean();
            header('Location: /users');
            exit;
        }

        $user->email = $_POST['email'] ?? $user->email;
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

        $id = $_GET['id'] ?? $_POST['id'] ?? null;
        if ($id) {
            $user = User::find($id);
            if ($user) {
                $user->delete();
            }
        }

        ob_end_clean();
        header('Location: /users');
        exit;
    }
}