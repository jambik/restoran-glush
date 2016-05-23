<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    protected $items = [

        [1, 'Джанбулат Магомаев', 'jambik@gmail.com', 'user-1.jpg'],
        [2, 'Заур Сунгуров', 'zsungurov@gmail.com', ''],
        [3, 'Вася Пупкин', 'vasya.pupkin@test.com', ''],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Role();
        $admin->name         = 'admin';
        $admin->display_name = 'Администратор'; // optional
        $admin->description  = ''; // optional
        $admin->save();

        $row1 = array_combine(['id', 'name', 'email', 'image'], $this->items[0]) + ['password' => bcrypt('111111')];
        $user1 = User::create($row1);

        $row2 = array_combine(['id', 'name', 'email', 'image'], $this->items[1]) + ['password' => bcrypt('zaurzaur')];
        $user2 = User::create($row2);

        $row3 = array_combine(['id', 'name', 'email', 'image'], $this->items[2]) + ['password' => bcrypt('123456')];
        $user3 = User::create($row3);

        $user1->attachRole($admin);
        $user2->attachRole($admin);
    }
}
