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

    /**
     * Resolve the field's value for display.
     *
     * @param  mixed  $resource
     * @param  string|null  $attribute
     *
     * @return void
     */
    public function resolveForDisplay($resource, $attribute = null)
    {
        if (empty($this->value)) {
            $this->value = null;
        }

        $file = new GenericFile($this->value);

        $path = FileCache::get($file, function ($file, $path) {
            return basename($path);
        });

        $url = vsprintf('%s/%s', ['nova-vendor/skydiver/nova-cached-images', $path]);

        $this->value = url($url);
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
