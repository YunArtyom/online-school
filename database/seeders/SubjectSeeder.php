<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Seeder;


class SubjectSeeder extends Seeder
{
    public function run(): void
    {
        $subjects = [
            [
                'name' => 'Математика',
                'grade_id' => 1,
                'status' => Subject::INACTIVE_STATUS,
                'description' => '<div>12321312</div>',
                'price_usd' => 50,
                'price_rub' => 4500,
                'price_won' => 60000,
            ],
            [
                'name' => 'Физика',
                'grade_id' => 1,
                'status' => Subject::INACTIVE_STATUS,
                'description' => '<div>12321312</div>',
                'price_usd' => 70,
                'price_rub' => 6300,
                'price_won' => 84000,
            ],
            [
                'name' => 'Химия',
                'grade_id' => 1,
                'status' => Subject::INACTIVE_STATUS,
                'description' => '<div>12321312</div>',
                'price_usd' => 60,
                'price_rub' => 5400,
                'price_won' => 72000,
            ],
            [
                'name' => 'Английский',
                'grade_id' => 1,
                'status' => Subject::INACTIVE_STATUS,
                'description' => '<div>12321312</div>',
                'price_usd' => 55,
                'price_rub' => 4950,
                'price_won' => 66000,
            ],
            [
                'name' => 'Математика',
                'grade_id' => 2,
                'status' => Subject::INACTIVE_STATUS,
                'description' => '<div>12321312</div>',
                'price_usd' => 50,
                'price_rub' => 4500,
                'price_won' => 60000,
            ],
            [
                'name' => 'Физика',
                'grade_id' => 2,
                'status' => Subject::INACTIVE_STATUS,
                'description' => '<div>12321312</div>',
                'price_usd' => 70,
                'price_rub' => 6300,
                'price_won' => 84000,
            ],
            [
                'name' => 'Химия',
                'grade_id' => 2,
                'status' => Subject::INACTIVE_STATUS,
                'description' => '<div>12321312</div>',
                'price_usd' => 60,
                'price_rub' => 5400,
                'price_won' => 72000,
            ],
            [
                'name' => 'Биология',
                'grade_id' => 2,
                'status' => Subject::INACTIVE_STATUS,
                'description' => '<div>12321312</div>',
                'price_usd' => 55,
                'price_rub' => 4950,
                'price_won' => 66000,
            ],
        ];

        foreach ($subjects as $subject) {
            Subject::create($subject);
        }
    }
}
