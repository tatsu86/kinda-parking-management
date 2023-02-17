<?php

namespace Database\Seeders;

use App\Models\Booking;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class BookingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bookings')->truncate();

        $bookings = [];
        $appointment_date = Carbon::today()->subDay(1);

        for ($i=1; $i<=30; $i++) {
            //偶数の場合は処理を抜ける
            if ($i % 2 == 0) {
                continue;
            }

            $record = [
                'parking_id' => $i,
                'user_id' => 1,
                'appointment_date' => $appointment_date,
                'appointment_car_number' => mt_rand(0, 9).mt_rand(0, 9).'-'.mt_rand(0, 9).mt_rand(0, 9),
                'memo' => 'メモ' . $i,
            ];

            array_push($bookings, $record);
        }

        foreach ($bookings as $record) {
            Booking::create($record);
        }

    }
}
