<?php

namespace Tests\Feature;

use Tests\TestCase;

/**
 * Class SubscribeTest
 * @package Tests\Feature
 */
class SubscribeTest extends TestCase
{
    public function testSubscribeWithNewEmail()
    {
        $response = $this->json('GET', 'api/subscribe', [
            'email' => random_int(1000, 9999) . '@test.de'
        ]);

        $response->assertStatus(200);
        $this->assertEquals($response->getOriginalContent(), 'success');
    }

    public function testSubscribeWithExistingEmail()
    {
        $response = $this->json('GET', 'api/subscribe', [
            'email' => 'julian@whats2doo.com'
        ]);

        $response->assertStatus(200);
        $this->assertEquals($response->getOriginalContent(), 'exists');
    }
}
