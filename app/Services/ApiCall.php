<?php

namespace App\Services;

use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Http;


class ApiCall
{
    protected string $backendUrl;
    protected ?string $token;

    public function __construct()
    {
        $this->backendUrl = 'http://localhost/online-school/public/api';
        $this->token = Cookie::get('api_sanctum_token');
    }

    protected function buildRequest()
    {
        $request = Http::accept('application/json');

        if ($this->token) {
            $request = $request->withToken($this->token);
        }

        return $request;
    }

    public function get(string $url, array $params = []): array
    {
        return $this->buildRequest()
            ->get($this->backendUrl . $url, $params)->json();
    }

    public function post(string $url, array $data = []): array
    {
        return $this->buildRequest()
            ->post($this->backendUrl . $url, $data)->json();
    }

    public function put(string $url, array $data = []): array
    {
        return $this->buildRequest()
            ->put($this->backendUrl . $url, $data)->json();
    }

    public function delete(string $url, array $data = []): array
    {
        return $this->buildRequest()
            ->withBody(json_encode($data), 'application/json')
            ->delete($this->backendUrl . $url)->json();
    }
}
