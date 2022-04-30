<?php

namespace Tests\Unit;
use Tests\TestCase;
use App\Http\controllers\VisitorController;
use Illuminate\Http\Request;

use Session;
use App\User;
use Auth;

class visitorTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testVisitorAdd(){
        Session::start();
        $user = User::find(1);
        Auth::login($user);

        $data=['Name'=>'Arman','Contact_No'=>'01717232323','Email'=>'arman@gmail.com' ,'Address'=>'banasri','status'=>'left', 'count'=>'0'];
        $response=$this->json('POST', '/create',$data);
        // dd($response->getContent());

        $this->assertDatabaseHas('visitors', [
            'Email'=>'arman@gmail.com'

        ]);
        $this->assertDatabaseHas('visitors', [
            'Name'=>'Arman'

        ]);

        $this->assertDatabaseHas('visitors', [
            'Contact_No'=>'01717232323'

        ]);
        $this->assertDatabaseHas('visitors', [
            'Address'=>'banasri'

        ]);
        $this->assertDatabaseHas('visitors', [
            'status'=>'left'

        ]);
        $this->assertDatabaseHas('visitors', [
            'count'=>'0'

        ]);

    }
    public function test_delete_visitor(){

        $carcon = new VisitorController;

        $visitor_id=18;
        $response = $carcon->destroy( $visitor_id);


        // dd($response->getContent());
        $this->assertDatabaseMissing('visitors', [
            'id'=>'18'
        ]);

    }

}
