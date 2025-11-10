<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
{
    // 1. **التعليق** على الكود القديم الذي يسبب الخطأ
    // User::factory(10)->create();

    // 2. **التعليق** على هذا الكود الذي يستخدم 'name'
    // User::factory()->create([
    //     'name' => 'Test User',
    //     'email' => 'test@example.com',
    // ]);

    // 3. **استدعاء الـ Seeders الصحيحة**
    $this->call([
        \Database\Seeders\UserSeeder::class, // هذا لإنشاء المدير الذي عدّلته
        // \Database\Seeders\CategorySeeder::class, // أضف هنا أي Seeders أخرى للمحتوى
        // \Database\Seeders\MenuSeeder::class,
    ]);
}
}
