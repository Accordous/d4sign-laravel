<?php

namespace Accordous\D4sign\Services;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

abstract class Client
{

    protected $client;

    protected const ENV_PRODUCTION = 'https://secure.d4sign.com.br/api/v1/';

    protected const ENV_SANDBOX = 'https://sandbox.d4sign.com.br/api/v1/';

    protected function getBaseUri()
    {
        return config('d4sign.mode') === 'production' ? self::ENV_PRODUCTION : self::ENV_SANDBOX;
    }

    public function __construct()
    {
        $this->client = Http::acceptJson()
                            ->withHeaders(
                                [
                                    'tokenAPI' => config('d4sign.token_api'),
                                    'cryptKey' => config('d4sign.crypt_key'),
                                ]
                            )
                            ->baseUrl($this->getBaseUri());
    }

    /**
     * @param  string  $url
     * @param  array  $query
     *
     * @return \Illuminate\Http\Client\Response
     */
    public function get(string $url, array $query = []): Response
    {
        return $this->client
	        ->get($url, $query);
    }

    /**
     * @param  string  $url
     * @param  array  $data
     *
     * @return \Illuminate\Http\Client\Response
     */
    public function post(string $url, array $data = []): Response
    {
        return $this->client
	        ->post($url, $data);
    }

    /**
     * @param  string  $url
     * @param  array  $data
     *
     * @return \Illuminate\Http\Client\Response
     */
    public function put(string $url, array $data): Response
    {
        return $this->client->put($url, $data);
    }

    /**
     * @param  string  $url
     * @param  array  $data
     *
     * @return \Illuminate\Http\Client\Response
     */
    public function delete(string $url, array $data): Response
    {
        return $this->client->delete($url, $data);
    }

}
