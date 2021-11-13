<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Customer;
use App\Models\Priority;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Testing\WithFaker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->admin()->create();
        User::factory(5)->create();
        Category::factory(10)->create();
        Priority::factory(10)->create();
        Customer::factory(20)->create()->each(function ($customer) {
            $admin = User::where('is_admin', true)->get()->random();
            $customer->tickets()->saveMany(
                Ticket::factory(rand(1, 5))->make([
                    'admin_id' => $admin->id,
                ])
            );

            $customer->tickets()->saveMany(
                Ticket::factory(rand(1, 5))->closed()->make([
                    'admin_id' => $admin->id,
                ])
            );
        });

        Ticket::all()->each(function ($ticket) {
            $ticket->comments()->saveMany(
                Comment::factory(rand(1, 5))->make([
                    'user_id' => $ticket->admin->id,
                ])
            );

            for ($i = 0; $i < rand(1, 5); $i++) {
                $ticket->agents()->attach(User::where('is_admin', false)->get()->random()->id);
            }
        });
    }
}
