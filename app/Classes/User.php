<?php


namespace App\Classes;


class User
{
    protected $user = [];

    public function getAllUser()
    {
        $this->user = [
            0 => [
                'name'     => 'Subrota',
                'mobile'   => '12345',
                'location' => 'Dhaka',
            ],
            1 => [
                'name'     => 'Sribas',
                'mobile'   => '67890',
                'location' => 'Tangail',
            ],
        ];
        return $this->user;
    }
}