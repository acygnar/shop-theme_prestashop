<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'doctrine.cache.provider' shared service.

return $this->services['doctrine.cache.provider'] = new \Doctrine\Common\Cache\FilesystemCache(($this->targetDirs[0].'/doctrine'));