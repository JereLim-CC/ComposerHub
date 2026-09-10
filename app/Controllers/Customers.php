<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $customers = [
            [
                'full_name' => 'Juan Dela Cruz',
                'email' => 'juan@gmail.com',
                'phone' => '09171234567'
            ],
            [
                'full_name' => 'Maria Santos',
                'email' => 'maria@gmail.com',
                'phone' => '09181234567'
            ],
            [
                'full_name' => 'Carlos Reyes',
                'email' => 'carlos@gmail.com',
                'phone' => '09191234567'
            ],
            [
                'full_name' => 'Angela Garcia',
                'email' => 'angela@gmail.com',
                'phone' => '09201234567'
            ],
            [
                'full_name' => 'Mark Bautista',
                'email' => 'mark@gmail.com',
                'phone' => '09211234567'
            ]
        ];

        return view('customers/index', [
            'customers' => $customers
        ]);
    }
}