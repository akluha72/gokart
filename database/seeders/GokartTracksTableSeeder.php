<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\GokartTrack;

class GokartTracksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tracks = [
            [
                'name' => 'Sepang International Kart Circuit',
                'description' => 'One of the most famous karting tracks in Malaysia, located near the Sepang F1 Circuit.',
                'latitude' => 2.7593,
                'longitude' => 101.7380,
            ],
            [
                'name' => 'Proton City Go-Kart Circuit',
                'description' => 'A well-maintained track with challenging corners and straights.',
                'latitude' => 4.1235,
                'longitude' => 101.0382,
            ],
            [
                'name' => 'Extreme Park',
                'description' => 'A popular spot for karting enthusiasts in the heart of Kuala Lumpur.',
                'latitude' => 3.1733,
                'longitude' => 101.7116,
            ],
            [
                'name' => 'Kart Quest',
                'description' => 'A scenic track located near the waterfront with a mix of tight corners and straights.',
                'latitude' => 1.4700,
                'longitude' => 103.7400,
            ],
            [
                'name' => 'Shah Alam Go-Kart Circuit',
                'description' => 'A challenging track with elevation changes and technical sections.',
                'latitude' => 3.0738,
                'longitude' => 101.5183,
            ],
            [
                'name' => 'Penang Go-Kart Arena',
                'description' => 'A fun and exciting track for both beginners and experienced drivers.',
                'latitude' => 5.2475,
                'longitude' => 100.4386,
            ],
            [
                'name' => 'Kota Kinabalu Go-Kart Circuit',
                'description' => 'A picturesque track with views of the mountains and sea.',
                'latitude' => 5.9804,
                'longitude' => 116.0735,
            ],
            [
                'name' => 'Melaka Go-Kart Circuit',
                'description' => 'A family-friendly track with a mix of straights and corners.',
                'latitude' => 2.2796,
                'longitude' => 102.2849,
            ],
            [
                'name' => 'Kuantan Go-Kart Circuit',
                'description' => 'A well-designed track with a focus on safety and fun.',
                'latitude' => 3.8167,
                'longitude' => 103.3333,
            ],
            [
                'name' => 'Ipoh Go-Kart Circuit',
                'description' => 'A thrilling track with a mix of technical sections and high-speed straights.',
                'latitude' => 4.5975,
                'longitude' => 101.0901,
            ],
        ];

        // Insert tracks into the database
        foreach ($tracks as $track) {
            GokartTrack::create($track);
        }
    }
}
