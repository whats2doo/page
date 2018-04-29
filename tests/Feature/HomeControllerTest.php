<?php

namespace Tests\Feature;

use Tests\TestCase;

/**
 * Class HomeControllerTest
 * @package Tests\Feature
 */
class HomeControllerTest extends TestCase
{
    public function testHome()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }
}
