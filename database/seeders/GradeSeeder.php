<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class GradeSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('grades')->insert([
            [
                'grade'             => 1,
                'description'       => '<div>1234</div>',
                'start_at'          => '2025-09-01',
                'price_usd'         => 100,
                'price_rub'         => 7500,
                'price_won'         => 130000,
                'month_price_usd'   => 10,
                'month_price_rub'   => 750,
                'month_price_won'   => 13000,
            ],
            [
                'grade'             => 2,
                'description'       => '<div>1234</div>',
                'start_at'          => '2025-09-01',
                'price_usd'         => 200,
                'price_rub'         => 15000,
                'price_won'         => 260000,
                'month_price_usd'   => 20,
                'month_price_rub'   => 1500,
                'month_price_won'   => 26000,
            ],
            [
                'grade'             => 3,
                'description'       => '<div>1234</div>',
                'start_at'          => '2025-09-01',
                'price_usd'         => 200,
                'price_rub'         => 15000,
                'price_won'         => 260000,
                'month_price_usd'   => 20,
                'month_price_rub'   => 1500,
                'month_price_won'   => 26000,
            ],
            [
                'grade'             => 4,
                'description'       => '<div>1234</div>',
                'start_at'          => '2025-09-01',
                'price_usd'         => 200,
                'price_rub'         => 15000,
                'price_won'         => 260000,
                'month_price_usd'   => 20,
                'month_price_rub'   => 1500,
                'month_price_won'   => 26000,
            ],
            [
                'grade'             => 5,
                'description'       => '<div>1234</div>',
                'start_at'          => '2025-09-01',
                'price_usd'         => 200,
                'price_rub'         => 15000,
                'price_won'         => 260000,
                'month_price_usd'   => 20,
                'month_price_rub'   => 1500,
                'month_price_won'   => 26000,
            ]
        ]);
    }
}
