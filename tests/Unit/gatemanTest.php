<?php

namespace Tests\Unit;
use Tests\TestCase;
use App\Http\controllers\GatemanController;
use Illuminate\Http\Request;

use Session;
use App\User;
use Auth;

class gatemanTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testGatemanAdd(){
        Session::start();
        $user = User::find(1);
        Auth::login($user);

        $data=['Name'=>'Samin','Contact_No'=>'01717232324','SSN'=>'1234' ,'Address'=>'mirpur', 'picture'=>'Null'];
        $response=$this->json('POST', '/creategateman',$data);
        // dd($response->getContent());

        $this->assertDatabaseHas('gatemen', [
            'SSN'=>'1234'

        ]);
        $this->assertDatabaseHas('gatemen', [
            'Name'=>'Samin'

        ]);

        $this->assertDatabaseHas('gatemen', [
            'Contact_No'=>'01717232324'

        ]);
        $this->assertDatabaseHas('gatemen', [
            'Address'=>'mirpur'

        ]);


    }

    public function test_delete_gateman(){

        $carcon = new GatemanController;

        $gateman_id=12;
        $response = $carcon->destroy( $gateman_id);


        // dd($response->getContent());
        $this->assertDatabaseMissing('gatemen', [
            'id'=>'12'
        ]);

    }

}
