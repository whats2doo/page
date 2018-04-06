<?php

namespace Tests\Feature;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use Tests\TestCase;

/**
 * Class GooglePageSpeed
 * @package Tests\Feature
 */
class GooglePageSpeed extends TestCase
{
    const GOOGLE_PAGE_SPEED_URL = 'https://www.googleapis.com/pagespeedonline/v4/runPagespeed?url=';
    const GOOGLE_PAGE_SPEED_MIN = 85;

    /** @var Client $client */
    private $client;

    public function setUp()
    {
        parent::setUp();

        $this->client = new Client();
    }

    /**
     * @return bool
     */
    public function testGooglePageSpeed()
    {
        if ($this->app->environment() === 'testing') {
            $this->assertTrue(true);

            return true;
        }

        $response = $this->client->get(self::GOOGLE_PAGE_SPEED_URL . env('APP_URL'));
        $this->assertEquals(200, $response->getStatusCode());
        $body = json_decode($response->getBody()->getContents());

        // validate google page speed score
        $score = $body->ruleGroups->SPEED->score;
        $this->assertGreaterThanOrEqual(self::GOOGLE_PAGE_SPEED_MIN, $score);
    }
}
