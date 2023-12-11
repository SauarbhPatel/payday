<?php

namespace Database\Seeders\Tenant;

use App\Models\Tenant\WorkingShift\BreakTime\BreakTime;
use Illuminate\Database\Seeder;

class BreakTimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BreakTime::query()->truncate();

        $breakTimes = [
            [
                'name' => 'Lunch Break',
                'duration' => '01:00:00',
            ],
            [
                'name' => 'Tea Break',
                'duration' => '00:30:00',
            ],
            [
                'name' => 'Leisure Time',
                'duration' => '00:30:00',
            ],
        ];
        BreakTime::insert($breakTimes);
    }
}
