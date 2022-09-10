<?php 
namespace App\Services;

use Illuminate\Support\Facades\Http;

class guzzleService
{
  function get_request(string $method, string $url, array $body): array
  {
    $response = Http::withHeaders([
        'Content-Type' => 'application/json'
    ])->$method($url, [
        'body'=> json_encode($body)
    ])->getBody()->getContents();

    //dd($response);
    
    return json_decode($response, true);
  }
}