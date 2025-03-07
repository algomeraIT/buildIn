<?php

namespace Database\Seeders;

use App\Models\Ad;
use App\Models\Contract;
use App\Models\Offer;
use App\Models\Review;
use App\Models\Ticket;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\UserInformation;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'email' => 'sadmin@sadmin.com',
            'password' => bcrypt('password'),
            'role' => 'superAdmin',
        ]);

        User::factory()->has(UserInformation::factory())->count(5)->create();

        User::factory()
            ->has(UserInformation::factory())
            ->has(
                Ad::factory()
                    ->count(2)
                    ->has(
                        Offer::factory()
                            ->count(4)
                            ->state(function (array $attributes, Ad $ad) {
                                return ['user_id' => $ad->user_id];
                            })
                    )
                    ->has(
                        Contract::factory()
                            ->count(1)
                            ->state(function (array $attributes, Ad $ad) {
                                return ['user_id' => $ad->user_id];
                            })
                    )
            )
            ->has(Ticket::factory()->count(2))
            ->has(Review::factory()->count(2))
            ->count(10)
            ->create();
    }
}
