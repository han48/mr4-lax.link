<?php

namespace Mr4Lax\Link;

use Illuminate\Support\ServiceProvider;
use Encore\Admin\Admin;
use Encore\Admin\Form;

class LinkServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function boot(Link $extension)
    {
        if (!Link::boot()) {
            return;
        }

        if ($views = $extension->views()) {
            $this->loadViewsFrom($views, 'mr4-lax');
        }

        if ($this->app->runningInConsole() && $views = $extension->views()) {
            $this->publishes(
                [$views => resource_path('views/vendor/mr4-lax')],
                'mr4-lax-tinymce'
            );
        }

        Admin::booting(function () {
            Form::extend('link', LinkEditor::class);
        });

    }
}
