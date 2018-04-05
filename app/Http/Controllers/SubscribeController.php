<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Class SubscribeController
 * @package App\Http\Controllers
 */
class SubscribeController extends Controller
{
    public $sg;

    public function sendGridConnect()
    {
        $sg = new \SendGrid(getenv('SENDGRID_API_KEY'));

        return $sg;
    }

    public function insert(Request $request)
    {
        if (!$this->validateEmail($request['email'])) {
            $response = response()->json(null, 400);
        } else {
            $response = $this->getResponse($request['email']);
        }

        return $response;
    }

    public function getResponse($email)
    {
        $this->sg = $this->sendGridConnect();

        if ($this->insertEmail($email)) {
            $response = response()->json('success', 200);
        } else {
            $response = response()->json('exists', 200);
        }

        return $response;
    }

    public function validateEmail($email): bool
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    public function insertEmail($email): bool
    {
        $request_body = (object)['email' => $email];
        $response = $this->sg->client->contactdb()->recipients()->post([$request_body]);
        $body = json_decode($response->body());

        if ($response->statusCode() == 201 && $body->new_count == 1) {
            $this->addToList($body->persisted_recipients[0]);

            return true;
        } else {
            return false;
        }
    }

    public function addToList($id): int
    {
        $list_id = getenv('SENDGRID_LIST_ID');
        $response = $this->sg->client->contactdb()->lists()->_($list_id)->recipients()->_($id)->post();

        return $response->statusCode();
    }
}
