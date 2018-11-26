<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Parking;
use App\Http\Controllers\ParkingController;

class ProjectTest extends TestCase
{
    /** @return void */
    public function testApp()
    {
        $this->assertTrue(true);
    }

    /** @test */
    function WelcomeTest()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    /** @test */
    public function parkingTest()
    {
        $this->get('parkings')
            ->assertStatus(200)
            ->assertSee('Parkings');
    }

    /** @test */
    function  TestIndexView (){
        $test = new ParkingController();
        $this->assertNotEmpty($test->index());
    }

    /** @test */
    function TestEditView (){
        $park = new Parking();
        $test = new ParkingController();
        $this->assertNotEmpty($test->edit($park));
    }

    /** @test */
    function TestDelete (){
        $park = new Parking();
        $test = new ParkingController();
        $this->assertNotNull($test->destroy($park));
    }

}
