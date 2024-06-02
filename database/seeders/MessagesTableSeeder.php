<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('messages')->insert([
            [
                'message' => 'Test message 1',
                'photo' => null,
                'token' => Str::random(16),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'message' => 'Test message 2',
                'photo' => null,
                'token' => Str::random(16),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'message' => 'Test message 3',
                'photo' => 'photos/test_photo.jpg',
                'token' => Str::random(16),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
