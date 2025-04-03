<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;


class CalendarSeeder extends Seeder
{
    public function run()
    {
        Carbon::setLocale('ru');

        $start = Carbon::create(2025);
        $end = Carbon::create(2030);

        $holidays = [
            '01-01', '01-02', '01-03', '01-04', '01-05', '01-06', '01-07', // Новогодние дни (без переноса)
            '02-23', // День защитника Отечества
            '03-08', // Международный женский день
            '05-01', // Праздник Весны и Труда
            '05-09', // День Победы
            '06-12', // День России
            '11-04', // День народного единства
        ];

        // Если необходимо добавить праздники Южной Кореи
        /*
        $southKoreaHolidays = [
            '01-01', // Новый год
            '03-01', // День независимости
            '05-05', // День детей
            '08-15', // День освобождения
            '10-03', // День основания нации
            '10-09', // День хангыль
            '12-25', // Рождество
        ];
        $holidays = array_merge($holidays, $southKoreaHolidays);
        */

        // Для новогодних дней не делаем перенос праздников
        $newYearDays = ['01-01', '01-02', '01-03', '01-04', '01-05', '01-06', '01-07'];

        $data = [];
        // Генерация базового календаря
        while ($start->lessThan($end)) {
            $mmdd = $start->format('m-d');
            $isHoliday = in_array($mmdd, $holidays);
            $isWeekend = $start->isWeekend(); // Суббота или воскресенье

            $data[] = [
                'date'         => $start->toDateString(),
                'day_of_week'  => $start->translatedFormat('l'),
                'is_weekend'   => $isWeekend,
                'is_holiday'   => $isHoliday,
                'note'         => null,
                'created_at'   => now(),
                'updated_at'   => now(),
            ];

            $start->addDay();
        }

        // Обработка компенсационных праздников:
        // Если базовый праздник (не новогодний) выпадает на выходной, следующий рабочий день помечается как праздничный.
        $count = count($data);
        for ($i = 0; $i < $count; $i++) {
            $currentDate = Carbon::parse($data[$i]['date']);
            $mmdd = $currentDate->format('m-d');
            // Если текущий день – праздник, попадает на выходной и не является новогодним
            if ($data[$i]['is_holiday'] && $data[$i]['is_weekend'] && !in_array($mmdd, $newYearDays)) {
                // Ищем следующий рабочий день
                for ($j = $i + 1; $j < $count; $j++) {
                    // Если найден рабочий день (не выходной)
                    if (!$data[$j]['is_weekend']) {
                        // Если в этот день ещё не попал базовый праздник, отмечаем его как компенсационный
                        if (!$data[$j]['is_holiday']) {
                            $data[$j]['is_holiday'] = true;
                            $data[$j]['note'] = 'Перенос праздника с ' . $currentDate->toDateString();
                        }
                        break; // Обрабатываем только ближайший рабочий день
                    }
                }
            }
        }

        DB::table('calendar')->insert($data);
    }
}
