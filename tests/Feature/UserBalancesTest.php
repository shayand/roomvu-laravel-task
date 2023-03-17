<?php

namespace Tests\Feature;

use App\Models\User;
use Faker\Factory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Symfony\Component\HttpFoundation\Response as HttpCode;
use function PHPUnit\Framework\assertEquals;

class userBalancesTest extends TestCase
{
    /**
     * @var Generator
     */
    private \Faker\Generator|Factory $faker;

    /**
     * A basic feature test example.
     */
    public function test_user1(): void
    {
        $this->faker = \Faker\Factory::create();
        $transaction = [5,8,7,-10];
        $user = new User();
        $user->name = $this->faker->name();
        $user->email = $this->faker->email();
        $user->password = rand(111111,9999999);
        $user->save();

        foreach ($transaction as $single){
            $response = $this->post('/api/add-money',['amount' => $single,'user_id' => $user->id]);
            assertEquals($response->getStatusCode(),HttpCode::HTTP_CREATED);
            sleep(1);
        }

        $balance = $this->post('/api/get-balance',['user_id' => $user->id]);
        $calculatedBalance = json_decode($balance->getContent(),true);
        assert(array_sum($transaction),$calculatedBalance['balance']);
        sleep(1);
    }

    /**
     * A basic feature test example.
     */
    public function test_user2(): void
    {
        $this->faker = \Faker\Factory::create();
        $transaction = [-10,-10,10,67];
        $user = new User();
        $user->name = $this->faker->name();
        $user->email = $this->faker->email();
        $user->password = rand(111111,9999999);
        $user->save();

        foreach ($transaction as $single){
            $response = $this->post('/api/add-money',['amount' => $single,'user_id' => $user->id]);
            assertEquals($response->getStatusCode(),HttpCode::HTTP_CREATED);
            sleep(1);
        }

        $balance = $this->post('/api/get-balance',['user_id' => $user->id]);
        $calculatedBalance = json_decode($balance->getContent(),true);
        assert(array_sum($transaction),$calculatedBalance['balance']);
        sleep(1);
    }

    /**
     * A basic feature test example.
     */
    public function test_user3(): void
    {
        $this->faker = \Faker\Factory::create();
        $transaction = [7.8,8.9,11.6,-11.9];
        $user = new User();
        $user->name = $this->faker->name();
        $user->email = $this->faker->email();
        $user->password = rand(111111,9999999);
        $user->save();

        foreach ($transaction as $single){
            $response = $this->post('/api/add-money',['amount' => $single,'user_id' => $user->id]);
            assertEquals($response->getStatusCode(),HttpCode::HTTP_CREATED);
            sleep(1);
        }

        $balance = $this->post('/api/get-balance',['user_id' => $user->id]);
        $calculatedBalance = json_decode($balance->getContent(),true);
        assert(array_sum($transaction),$calculatedBalance['balance']);
        sleep(1);
    }

    /**
     * A basic feature test example.
     */
    public function test_user4(): void
    {
        $this->faker = \Faker\Factory::create();
        $transaction = [34,56,78,99];
        $user = new User();
        $user->name = $this->faker->name();
        $user->email = $this->faker->email();
        $user->password = rand(111111,9999999);
        $user->save();

        foreach ($transaction as $single){
            $response = $this->post('/api/add-money',['amount' => $single,'user_id' => $user->id]);
            assertEquals($response->getStatusCode(),HttpCode::HTTP_CREATED);
            sleep(1);
        }

        $balance = $this->post('/api/get-balance',['user_id' => $user->id]);
        $calculatedBalance = json_decode($balance->getContent(),true);
        assert(array_sum($transaction),$calculatedBalance['balance']);
        sleep(1);
    }

    /**
     * A basic feature test example.
     */
    public function test_user5(): void
    {
        $this->faker = \Faker\Factory::create();
        $transaction = [-20,-30,-12.5,-12];
        $user = new User();
        $user->name = $this->faker->name();
        $user->email = $this->faker->email();
        $user->password = rand(111111,9999999);
        $user->save();

        foreach ($transaction as $single){
            $response = $this->post('/api/add-money',['amount' => $single,'user_id' => $user->id]);
            assertEquals($response->getStatusCode(),HttpCode::HTTP_CREATED);
            sleep(1);
        }

        $balance = $this->post('/api/get-balance',['user_id' => $user->id]);
        $calculatedBalance = json_decode($balance->getContent(),true);
        assert(array_sum($transaction),$calculatedBalance['balance']);
        sleep(1);
    }

    /**
     * A basic feature test example.
     */
    public function test_user6(): void
    {
        $this->faker = \Faker\Factory::create();
        $transaction = [-12.5,14.8,12.2];
        $user = new User();
        $user->name = $this->faker->name();
        $user->email = $this->faker->email();
        $user->password = rand(111111,9999999);
        $user->save();

        foreach ($transaction as $single){
            $response = $this->post('/api/add-money',['amount' => $single,'user_id' => $user->id]);
            assertEquals($response->getStatusCode(),HttpCode::HTTP_CREATED);
            sleep(1);
        }

        $balance = $this->post('/api/get-balance',['user_id' => $user->id]);
        $calculatedBalance = json_decode($balance->getContent(),true);
        assert(array_sum($transaction),$calculatedBalance['balance']);
    }
}
