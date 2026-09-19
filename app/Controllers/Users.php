<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $users = [
            [
                'username' => 'admin',
                'full_name' => 'Jack Administrator',
                'role' => 'Administrator'
            ],
            [
                'username' => 'cashier01',
                'full_name' => 'Cole Santos',
                'role' => 'Cashier'
            ],
            [
                'username' => 'cashier02',
                'full_name' => 'Pedro Reyes',
                'role' => 'Cashier'
            ],
            [
                'username' => 'manager01',
                'full_name' => 'Ana Garcia',
                'role' => 'Manager'
            ],
            [
                'username' => 'staff01',
                'full_name' => 'Carlos Mendoza',
                'role' => 'Staff'
            ]
        ];

        return view('users', [
            'users' => $users
        ]);
    }
}