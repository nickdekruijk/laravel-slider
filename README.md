# laravel-slider
A slider/carousel package for Laravel, inclused model, migration, view, js and css.

## Usage
To install run:

```composer require nickdekruijk/laravel-slider```

If you don't like the default configuration (migration and/or table name) publish the config and edit `config/slider.php` where needed:

```php artisan vendor:publish --tag=config --provider="NickDeKruijk\LaravelSlider\SliderServiceProvider"```

After installation run the migration with:

```php artisan migrate```

Include the provided javascript, lazyload and css inside your application. For example with the [nickdekruijk/minify](https://github.com/nickdekruijk/minify) package:

```php
{!! Minify::stylesheet(['../vendor/nickdekruijk/laravel-slider/src/assets/slider.css', 'styles.scss']) !!}
{!! Minify::javascript(['https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.5.1/dist/lazyload.min.js', '../vendor/nickdekruijk/laravel-slider/src/assets/slider.js', 'scripts.js']) !!}
```

Or just copy/paste the contents of the assets and change where needed.

Add the required javascript somewhere in your applications, for example /resources/js/scripts.js
```javascript
var myLazyLoad = new LazyLoad({
    elements_selector: '.lazy',
    load_delay: 300
});
var slider = new Slider({
    selector: '.slider',
    slideSelector: '.slide',
    interval: 5000,
});
```

Now you can use the default view `slider::slider` inside Laravel.

## [nickdekruijk/admin](https://github.com/nickdekruijk/admin) integration
Add this to the modules array in your `config/admin.php` file (change where needed for your project):
```php
        'slider' => [
            'view' => 'admin::model',
            'icon' => 'fa-files-o',
            'title' => 'Slider',
            'index' => 'title,head,button1,link1',
            'model' => 'NickDeKruijk\LaravelSlider\Slide',
            'orderBy' => 'sort',
            'sortable' => true,
            'active' => 'active',
            'columns' => [
                'active' => [
                    'default' => true,
                ],
                'title' => [
                    'validate' => 'required',
                ],
                'images' => [
                    'type' => 'image',
                ],
                'classes' => [],
                'head' => [],
                'text' => [
                    'tinymce' => true,
                ],
                'button1' => [],
                'link1' => [],
                'button2' => [],
                'link2' => [],
                'button3' => [],
                'link3' => [],
                'button4' => [],
                'link4' => [],
            ],
        ],
```

