<?php

namespace Skydiver\NovaCachedImages;

use Laravel\Nova\Fields\Field;

use FileCache;
use Biigle\FileCache\GenericFile;

class NovaCachedImages extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'nova-cached-images';

    public function __construct($name, $attribute = null, callable $resolveCallback = null) {
        parent::__construct($name, $attribute, $resolveCallback);
        $this->resolveUsing(function ($value) {
            $file = new GenericFile($value);

            $path = FileCache::get($file, function ($file, $path) {
                return basename($path);
            });

            $url = vsprintf('%s/%s', ['nova-vendor/skydiver/nova-cached-images', $path]);
            return url($url);
        });
    }

    public function class(string $class)
    {
        return $this->withMeta(['class' => $class]);
    }

    public function containerClass(string $containerClass)
    {
        return $this->withMeta(['containerClass' => $containerClass]);
    }

    public function width(string $width)
    {
        return $this->withMeta(['width' => $width]);
    }

    public function height(string $height)
    {
        return $this->withMeta(['height' => $height]);
    }

    public function radius(string $radius)
    {
        return $this->withMeta(['radius' => $radius]);
    }

}
