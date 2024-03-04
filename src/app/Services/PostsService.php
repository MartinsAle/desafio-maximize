<?php

namespace App\Services;

use App\Http\Traits\ConsumesExternalServices;

class PostsService
{
    use ConsumesExternalServices;
	
    protected $baseUri;

    public function __construct()
	{
        $this->baseUri = config('services.post.base_uri');
	}

    public function decodeResponse($response)
    {
        $decodedResponse = json_decode($response);

        return $decodedResponse->data ?? $decodedResponse;
    }

    public function getPosts()
    {
        return $this->makeRequest('GET', 'posts');
    }

    public function getPost($id)
    {
        return $this->makeRequest('GET', "posts/{$id}");
    }

    public function publishPosts($productData)
    {
        return $this->makeRequest('POST', 'posts', [], $productData, [], $hasFile = true);
    }


}
