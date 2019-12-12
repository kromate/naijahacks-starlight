<?php

use App\Category;
use App\Donation;
use App\Transacton;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Category::truncate();
        Donation::truncate();
        Transacton::truncate();
        DB::table('category_donation')->truncate();

        User::create([
            'name' => 'Busola Okeowo',
            'email' => 'busolaokemoney@gmail.com',
            'password' => bcrypt('password'),
            'verified' => User::VERIFIED,
            'admin' => true,
        ]);
        factory(User::class, 500)->create();
        factory(Category::class, 10)->create();
        factory(Donation::class, 1000)->create()->each(
            function ($donation) {
                $categories = Category::all()->random(mt_rand(1, 3))->pluck('id');
                $donation->categories()->attach($categories);
            }
        );
        factory(Transacton::class, 1000)->create();
        // $this->call(UsersTableSeeder::class);
    }
}
