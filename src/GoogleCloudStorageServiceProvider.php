<?php

declare(strict_types=1);

namespace Talboterie\GoogleCloudStorage;

use Google\Cloud\Storage\StorageClient;
use Illuminate\Support\Arr;
use Illuminate\Support\ServiceProvider;
use League\Flysystem\Filesystem;
use Talboterie\FlysystemGCPStorage\StorageAdapter;

class GoogleCloudStorageServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->app['filesystem']->extend('gcp-storage', function ($app, $config) {
            $client = new StorageClient(
                array_filter(
                    Arr::only(['keyFilePath', 'keyFile'])
                )
            );

            return new Filesystem(
                new StorageAdapter(
                    $client->bucket($config['bucket']),
                    $config['prefix']
                )
            );
        });
    }
}
