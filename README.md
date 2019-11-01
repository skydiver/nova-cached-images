# nova-cached-images
> Laravel Nova field to display (and cache) remote images


## Installation
1. run `composer require skydiver/nova-cached-images`


## Usage
1. open your resource
2. add `use Skydiver\NovaCachedImages\NovaCachedImages;` in the top of your file
3. insert `NovaCachedImages::make("Avatar")` in your fields method


## Field options
```
NovaCachedImages::make("Avatar")
  ->class('image-class')                      // img tag class
  ->containerClass('image-container-class')   // imgage container class
  ->width('50px')                             // image width 
  ->height('50px')                            // image height
  ->radius('5px')                             // image border radius
```

## Credits
* [biigle/laravel-file-cache](https://github.com/biigle/laravel-file-cache): Fetch and cache files from local filesystem, cloud storage or public webservers in Laravel or Lumen.


## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
