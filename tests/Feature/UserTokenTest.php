<?php

namespace Tests\Feature;

use App\Models\UserToken;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTokenTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testInsert(): void
    {
       $token = new UserToken();

       $token->user_id='testing1';
       $token->token='askkdkw12359123';

       $result = $token->save();

       self::assertTrue($result);
    }

    public function testDelete(): void
    {
       $token = UserToken::find('testing1');
    //    $token->token='askkdkw12359123';

       $result = $token->delete();

       self::assertTrue($result);
    }
}
