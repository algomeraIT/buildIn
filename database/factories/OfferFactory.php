<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Ad;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Offer>
 */
class OfferFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = \App\Models\Offer::class;
    
    public function definition(): array
    {
        $ad = Ad::inRandomOrder()->first();
        $user_id = $ad->user_id;
        $recipient_id = User::whereNotIn('id', [$user_id, 1])->inRandomOrder()->first()->id;

        return [
            'ad_id' => $ad->id,
            'user_id' => $user_id,
            'recipient_id' => $recipient_id,
            'ammount'=> $this->faker->randomFloat(null, 50, 10000),
            'work_start_date'=> Carbon::now()->subDays(rand(0, 365)),
            'work_end_date' => Carbon::now()->subDays(rand(0, 365)),
        ];
    }
}
