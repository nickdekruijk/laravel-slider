# laravel-slider
A slider/carousel package for Laravel, inclused model, migration, view, js and css.

## nickdekruijk/admin integration
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

