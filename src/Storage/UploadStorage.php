<?php

namespace Oneup\Displace\Storage;

use Oneup\Displace\FileInterface;
use Oneup\Displace\StorageInterface;

class UploadStorage implements StorageInterface
{
    protected $adapter;

    public function __construct(AdapterInterface $adapter)
    {
        $this->adapter = $adapter;
    }

    public function move(FileInterface $file, $path)
    {

    }
}
