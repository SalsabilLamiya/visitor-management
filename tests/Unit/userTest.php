<?php

namespace Tests\Unit;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Session;
use App\User;
use Auth;


class userTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }
    public function testRegister(){
        $data=['name'=>'Arman','email'=>'arman@gmail.com','password'=>'tormuj69' ,'password_confirmation'=>'tormuj69','status'=>'0'];
        $response=$this->json('POST', '/register',$data);
        // dd($response->getContent());

        $this->assertDatabaseHas('users', [
            'email'=>'arman@gmail.com'
        ]);

    }

    public function testLogin(){
        $data=['email'=>'arman@gmail.com','password'=>'tormuj69' ];
        $response=$this->json('POST', '/login',$data);
        $this->assertEquals($data['email'],Auth::user()->email);
    }

    public function testHasAdmin(){
        $this->assertDatabaseHas('users', [
            'status'=>'1'
        ]);}


}
