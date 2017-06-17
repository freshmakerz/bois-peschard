<?php

use Illuminate\Database\Seeder;

class PricesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prices')->truncate();
        DB::table('prices')->insert([
            [
                'name' => 'Le Pin *',
                'capacity' => '2',
                'low_season' => 390,
                'mid_season' => 450,
                'high_season' => 500,
                'very_high_season' => 560,
                'type' => 'week'
            ],
            [
                'name' => 'Le Frêne',
                'capacity' => '4',
                'low_season' => 490,
                'mid_season' => 580,
                'high_season' => 700,
                'very_high_season' => 980,
                'type' => 'week'
            ],
            [
                'name' => 'Le Châtaignier',
                'capacity' => '4/5',
                'low_season' => 550,
                'mid_season' => 650,
                'high_season' => 810,
                'very_high_season' => 1080,
                'type' => 'week'
            ],
            [
                'name' => 'Le Chêne',
                'capacity' => '6',
                'low_season' => 650,
                'mid_season' => 780,
                'high_season' => 950,
                'very_high_season' => 1350,
                'type' => 'week'
            ],
            [
                'name' => 'Le Hêtre *',
                'capacity' => '8',
                'low_season' => 750,
                'mid_season' => 900,
                'high_season' => 1200,
                'very_high_season' => 1580,
                'type' => 'week'
            ]
        ]);
        DB::table('prices')->insert([
            [
                'name' => 'Le Pin *',
                'capacity' => '2',
                'mid_week_end' => 330,
                'full_week_end' => 210,
                'type' => 'week-end'
            ],
            [
                'name' => 'Le Frêne',
                'capacity' => '4',
                'mid_week_end' => 360,
                'full_week_end' => 290,
                'type' => 'week-end'
            ],
            [
                'name' => 'Le Châtaignier',
                'capacity' => '4/5',
                'mid_week_end' => 390,
                'full_week_end' => 330,
                'type' => 'week-end'
            ],
            [
                'name' => 'Le Chêne',
                'capacity' => '6',
                'mid_week_end' => 520,
                'full_week_end' => 410,
                'type' => 'week-end'
            ],
            [
                'name' => 'Le Hêtre *',
                'capacity' => '8',
                'mid_week_end' => 620,
                'full_week_end' => 510,
                'type' => 'week-end'
            ]
        ]);
    }
}
