<?php

namespace Tests\Feature;

use GuzzleHttp\Client;
use Tests\TestCase;

class GooglePageSpeed extends TestCase
{
    const GOOGLE_PAGE_SPEED_URL = 'https://www.googleapis.com/pagespeedonline/v4/runPagespeed?url=';

    /**
     * @return bool
     */
    public function testGooglePageSpeed()
    {
        if ($this->app->environment() === 'local' || $this->app->environment() === 'testing') {
            $this->assertTrue(true);

            return true;
        }

        // request
        $client = new Client();
        $response = $client->get(self::GOOGLE_PAGE_SPEED_URL . env('APP_URL'));
        $this->assertEquals(200, $response->getStatusCode());
        $body = json_decode($response->getBody()->getContents());

        // validate google page speed score
        $score = $body->ruleGroups->SPEED->score;
        $this->assertGreaterThanOrEqual(85, $score);

        return true;
    }
}
