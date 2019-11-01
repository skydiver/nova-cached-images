# nova-cached-images
> Laravel Nova field to display (and cache) remote images


## Installation
1. run `composer require skydiver/nova-cached-images`


## Usage
1. open your resource
2. add `use Skydiver\NovaCachedImages\NovaCachedImages;` in the top of your file
3. insert `NovaCachedImages::make("Avatar")` in your fields method
