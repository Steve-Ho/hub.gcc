<?php

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('en_AU');

        $this->seedTestUsers($faker);
    }

    private function seedTestUsers($faker)
    {
        User::create([
            'name'	 => 'Customer Service',
            'email'	 => 'customerservice@glorycitychurch.com',
            'role' => 1,
            'invited_by' => 1,
            'mobile' => 11111111,
            'confirm_token' => 'used',
            'is_active' => true,
            'password' => bcrypt('123123')
        ]);

        User::create([
            'name'	 => 'Admin',
            'email'	 => 'admin@admin.com',
            'role' => 1,
            'invited_by' => 1,
            'mobile' => 11111111,
            'confirm_token' => str_random(99),
            'is_active' => false,
            'password' => bcrypt('123123')
        ]);


        foreach(range(1, 5) as $index) {
            User::create([
                'name'	 => $faker->name,
                'email'	 => $faker->email,
                'role' => 2,
                'invited_by' => 1,
                'mobile' => 11111111,
                'confirm_token' => str_random(99),
                'is_active' => false,
                'password' => bcrypt('123123')
            ]);
        }

    }
}
