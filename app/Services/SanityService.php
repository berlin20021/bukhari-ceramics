<?php

namespace App\Services;

use Sanity\Client;

class SanityService
{
    protected $client;
    protected $isConfigured = false;

    public function __construct()
    {
        $projectId = config('sanity.project_id');
        $dataset = config('sanity.dataset');

        if ($projectId && $dataset) {
            $this->isConfigured = true;
            $this->client = new Client([
                'projectId' => $projectId,
                'dataset' => $dataset,
                'token' => config('sanity.token'),
                'apiVersion' => config('sanity.api_version', '2023-01-01'),
            ]);
        }
    }

    public function isConfigured()
    {
        return $this->isConfigured;
    }

    public function getProducts()
    {
        if (!$this->isConfigured) {
            throw new \Exception('Sanity is not configured');
        }

        $query = '*[_type == "product"]{
            _id,
            name,
            category,
            price,
            unit,
            image{
                asset->{
                    url
                }
            },
            images[]{
                asset->{
                    url
                }
            },
            description,
            features,
            isNew,
            slug
        }';

        return $this->client->fetch($query);
    }

    public function getProductBySlug($slug)
    {
        if (!$this->isConfigured) {
            throw new \Exception('Sanity is not configured');
        }

        $query = '*[_type == "product" && slug.current == $slug][0]{
            _id,
            name,
            category,
            price,
            unit,
            image{
                asset->{
                    url
                }
            },
            images[]{
                asset->{
                    url
                }
            },
            description,
            features,
            isNew,
            slug
        }';

        return $this->client->fetch($query, ['slug' => $slug]);
    }

    public function getProductById($id)
    {
        if (!$this->isConfigured) {
            throw new \Exception('Sanity is not configured');
        }

        $query = '*[_type == "product" && _id == $id][0]{
            _id,
            name,
            category,
            price,
            unit,
            image{
                asset->{
                    url
                }
            },
            images[]{
                asset->{
                    url
                }
            },
            description,
            features,
            isNew,
            slug
        }';

        return $this->client->fetch($query, ['id' => $id]);
    }
}
