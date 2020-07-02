<?php

namespace BoxyBird\DirectusConfig\Traits;

trait Images
{
    /**
    * Original image URL helper
    *
    * Ref: https://docs.directus.io/guides/files.html#original-files
    */
    public function getImageUrl(string $filename_disk): string
    {
        $base_url     = config('directus_config.base_url');
        $project_name = config('directus_config.project_name');

        return "{$base_url}/uploads/{$project_name}/originals/{$filename_disk}";
    }

    /**
     * Thumbnail image URL helper
     *
     * Ref: https://docs.directus.io/guides/files.html#requesting-thumbnails
    */
    public function getImageThumbnail(string $private_hash, string $key): string
    {
        $base_url     = config('directus_config.base_url');
        $project_name = config('directus_config.project_name');

        return "{$base_url}/{$project_name}/assets/{$private_hash}?key={$key}";
    }
}
