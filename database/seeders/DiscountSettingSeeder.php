<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DiscountSetting;

class DiscountSettingSeeder extends Seeder
{
    public function run(): void
    {
        DiscountSetting::create([
            'minimal_belanja' => 100000,
            'persen_diskon'   => 10,
            'diskon_maksimum' => 20000,
            'is_active'       => true,
        ]);
    }
}