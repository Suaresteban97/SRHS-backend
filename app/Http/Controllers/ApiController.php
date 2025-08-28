<?php

namespace App\Http\Controllers;

//Paquetes
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function __construct(){
        $this->client = new Client();
        $this->endpoint = env("API_URL", "http://srhs-project.test/api/");
    }

    /**
     * GET
     * Peticiones GET al API
     */
    public function get(Request $request){
        $usuario = session("");
        $content = $request->all();

        $headers = [
            "Accept" => "application/json",
        ];

        if ($usuario != null) {
            $headers["Authorization"] = $usuario["Token"];
        }

        $body = $content;
        unset($body["url"]);

        try {
            $res = $this->client->request("GET", $this->endpoint . $content["url"], [
                "headers" => $headers,
                "json" => $body
            ]);
        } catch (ServerException $e) {
            $response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();
            return json_decode($responseBodyAsString);
        } catch (ServerException $e) {
            $response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();
            return json_decode($responseBodyAsString);
        }
    }

    /**
     * POST
     * Peticiones POST al API
     */
    public function post(Request $request){
        $usuario = session("");
        $content = $request->all();

        $headers = [
            "Accept" => "application/json",
        ];

        if ($usuario != null) {
            $headers["Authorization"] = $usuario["Token"];
        }

        $body = $content;
        unset($body["url"]);

        try {
            $res = $this->client->request("POST", $this->endpoint . $content["url"], [
                "headers" => $headers,
                "json" => $body
            ]);
        } catch (ServerException $e) {
            $response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();
            return json_decode($responseBodyAsString);
        } catch (ServerException $e) {
            $response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();
            return json_decode($responseBodyAsString);
        }
    }

    /**
     * PUT
     * Peticiones PUT al API
     */
    public function put(Request $request){
        $usuario = session("");
        $content = $request->all();

        $headers = [
            "Accept" => "application/json",
        ];

        if ($usuario != null) {
            $headers["Authorization"] = $usuario["Token"];
        }

        $body = $content;
        unset($body["url"]);

        try {
            $res = $this->client->request("PUT", $this->endpoint . $content["url"], [
                "headers" => $headers,
                "json" => $body
            ]);
        } catch (ServerException $e) {
            $response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();
            return json_decode($responseBodyAsString);
        } catch (ServerException $e) {
            $response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();
            return json_decode($responseBodyAsString);
        }
    }

    /**
     * DELETE
     * Peticiones DELETE al API
     */
    public function delete(Request $request){
        $usuario = session("");
        $content = $request->all();

        $headers = [
            "Accept" => "application/json",
        ];

        if ($usuario != null) {
            $headers["Authorization"] = $usuario["Token"];
        }

        $body = $content;
        unset($body["url"]);

        try {
            $res = $this->client->request("DELETE", $this->endpoint . $content["url"], [
                "headers" => $headers,
                "json" => $body
            ]);
        } catch (ServerException $e) {
            $response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();
            return json_decode($responseBodyAsString);
        } catch (ServerException $e) {
            $response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();
            return json_decode($responseBodyAsString);
        }
    }

}
