<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'type' => User::DIRECTOR_TYPE,
                'name' => 'Director User',
                'email' => 'director@mail.ru',
                'age' => 30,
                'country' => 'Russia',
                'additional' => null,
                'status' => 'active',
                'absent_form' => null,
                'absent_to' => null,
                'password' => Hash::make('12345678'),
            ],
            [
                'type' => User::ADMIN_TYPE,
                'name' => 'Admin User',
                'email' => 'admin@mail.ru',
                'age' => 30,
                'country' => 'Russia',
                'additional' => null,
                'status' => 'active',
                'absent_form' => null,
                'absent_to' => null,
                'password' => Hash::make('12345678'),
            ],
            [
                'type' => User::TEACHER_TYPE,
                'name' => 'Teacher User 1',
                'email' => 'teacher1@mail.ru',
                'age' => 30,
                'country' => 'Russia',
                'additional' => null,
                'status' => 'active',
                'absent_form' => null,
                'absent_to' => null,
                'password' => Hash::make('12345678'),
            ],
            [
                'type' => User::TEACHER_TYPE,
                'name' => 'Teacher User 2',
                'email' => 'teacher2@mail.ru',
                'age' => 30,
                'country' => 'Russia',
                'additional' => null,
                'status' => 'active',
                'absent_form' => null,
                'absent_to' => null,
                'password' => Hash::make('12345678'),
            ],
            [
                'type' => User::TEACHER_TYPE,
                'name' => 'Teacher User 3',
                'email' => 'teacher3@mail.ru',
                'age' => 30,
                'country' => 'Russia',
                'additional' => null,
                'status' => 'active',
                'absent_form' => null,
                'absent_to' => null,
                'password' => Hash::make('12345678'),
            ],
            [
                'type' => User::STUDENT_TYPE,
                'name' => 'Student User 1',
                'email' => 'student1@mail.ru',
                'age' => 30,
                'country' => 'Russia',
                'additional' => null,
                'status' => 'active',
                'absent_form' => null,
                'absent_to' => null,
                'password' => Hash::make('12345678'),
            ],
            [
                'type' => User::STUDENT_TYPE,
                'name' => 'Student User 2',
                'email' => 'student2@mail.ru',
                'age' => 30,
                'country' => 'Russia',
                'additional' => null,
                'status' => 'inactive',
                'absent_form' => null,
                'absent_to' => null,
                'password' => Hash::make('12345678'),
            ],
            [
                'type' => User::STUDENT_TYPE,
                'name' => 'Student User 3',
                'email' => 'student3@mail.ru',
                'age' => 30,
                'country' => 'Russia',
                'additional' => null,
                'status' => 'inactive',
                'absent_form' => null,
                'absent_to' => null,
                'password' => Hash::make('12345678'),
            ],
            [
                'type' => User::STUDENT_TYPE,
                'name' => 'Student User 4',
                'email' => 'student4@mail.ru',
                'age' => 30,
                'country' => 'Russia',
                'additional' => null,
                'status' => 'active',
                'absent_form' => null,
                'absent_to' => null,
                'password' => Hash::make('12345678'),
            ],
        ];

        foreach ($users as $userData) {
            User::updateOrCreate(
                ['email' => $userData['email']],
                $userData
            );
        }
    }
}
