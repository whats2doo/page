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

    public function insert(Request $request)
    {
        if (!$this->validateEmail($request['email'])) {
            return response()->json(null, 400);
        } else {
            $this->sg = $this->sendGridConnect();

            if ($this->insertEmail($request['email'])) {
                return response()->json('success', 200);
            } else {
                return response()->json('exists', 200);
            }
        }
    }

    public function validateEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        } else {
            return false;
        }
    }

    public function sendGridConnect()
    {
        $apiKey = getenv('SENDGRID_API_KEY');
        $sg = new \SendGrid($apiKey);

        return $sg;
    }

    public function insertEmail($email)
    {
        $request_body = (object)['email' => $email];
        $response = $this->sg->client->contactdb()->recipients()->post([$request_body]);

        if ($response->statusCode() == 201) {
            $response = json_decode($response->body());

            if ($response->new_count == 1) {
                $id = $response->persisted_recipients[0];
                $this->addToList($id);

                return true;
            }
        }else{
            return false;
        }
    }

    public function addToList($id)
    {
        $list_id = getenv('SENDGRID_LIST_ID');

        $response = $this->sg->client->contactdb()->lists()->_($list_id)->recipients()->_($id)->post();
        if ($response->statusCode() == 201) {
            return true;
        }else{
            return false;
        }
    }
}
