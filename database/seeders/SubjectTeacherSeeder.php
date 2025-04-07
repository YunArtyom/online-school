<?php

namespace Database\Seeders;

use App\Models\SubjectTeacher;
use Illuminate\Database\Seeder;


class SubjectTeacherSeeder extends Seeder
{
    public function run(): void
    {
        SubjectTeacher::create([
            'teacher_id' => 3,
            'subject_id' => 1,
        ]);
        SubjectTeacher::create([
            'teacher_id' => 3,
            'subject_id' => 2,
        ]);
        SubjectTeacher::create([
            'teacher_id' => 3,
            'subject_id' => 3,
        ]);
        SubjectTeacher::create([
            'teacher_id' => 3,
            'subject_id' => 4,
        ]);
        SubjectTeacher::create([
            'teacher_id' => 3,
            'subject_id' => 5,
        ]);
        SubjectTeacher::create([
            'teacher_id' => 3,
            'subject_id' => 6,
        ]);
        SubjectTeacher::create([
            'teacher_id' => 3,
            'subject_id' => 7,
        ]);
    }
}
