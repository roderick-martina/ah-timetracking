<?php

use App\Models\User;
use Inertia\Testing\Assert;

beforeEach(function () {
    Artisan::call('db:seed', ['--class' => 'SuperUserSeeder']);
});

it('can render dashboard page', function () {
    $user = User::factory()->create();
    $this
        ->actingAs($user)
        ->get(route('dashboard.index'))
        ->assertInertia(fn(Assert $page) => $page
            ->component('Dashboard/index')
        )
        ->assertStatus(200);
//        ->assertInertia(fn(\ClaudioDekker\Inertia\Assert $page) => $page
//        ->has('')
//        );
});

it('will show timetracking dates', function () {
    $user = User::factory()->create();
    $this
        ->actingAs($user)
        ->get(route('dashboard.index'))
        ->assertStatus(200);

});




//$user = createAdmin();
//auth()->login($user);
//$count = 3;
//Task::factory()->count($count)->create([
//    'assigned_to_id' => $user->id,
//]);
//
//
//$response = $this->actingAs($user)
//    ->get(route('dashboard.index'))
//    ->assertInertia(
//        fn (Assert $page) => $page
//            ->has(
//                'tasks',
//                fn (Assert $page) => $page
//                    ->has('data', $count)
//                    ->hasAll(['links','meta'])
//            )
//    );
//
//$response->assertStatus(200);