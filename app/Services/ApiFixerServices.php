<?php

namespace App\Services;

use GuzzleHttp\Client;

class ApiFixerServices
{
	protected $client;
	protected $key;

	public function __construct(Client $client)
	{
		$this->client = $client;
	}

	public function getCurrency($method, array $params)
	{
		$this->key = env('API_KEY_FIXER');
		
		$endpoint = $method . '?access_key=' . $this->key;
		$endpoint .= '&base' . $params['base'];

		return $this->endpointRequest($endpoint);
	}

	public function endpointRequest($url)
	{
		try {
			$response = $this->client->request('GET', $url);
		} catch (\Exception $e) {
            return [];
		}

		return $this->responseHandler($response->getBody()->getContents());
	}

	public function responseHandler($response)
	{
		if ($response) {
			return json_decode($response);
		}
		
		return [];
	}
}
