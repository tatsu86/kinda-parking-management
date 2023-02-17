<?php

namespace Database\Seeders;

use App\Models\Parking;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ParkingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('parkings')->truncate();

        $parkings = [];

        for ($i=1; $i<=30; $i++) {
            $record = [
                'number' => $i,
                'memo' => 'メモ' . $i,
            ];
            array_push($parkings, $record);
        }

        foreach($parkings as $record) {
            Parking::create($record);
        }
    }
}
