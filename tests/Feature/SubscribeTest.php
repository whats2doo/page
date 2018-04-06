<?php

namespace Tests\Feature;

use GuzzleHttp\Client;
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

    public function testSubscribe()
    }
}
