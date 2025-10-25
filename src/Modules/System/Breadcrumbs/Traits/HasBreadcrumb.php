<?php

namespace App\Modules\System\Breadcrumbs\Traits;

use App\Modules\System\Breadcrumbs\Models\Breadcrumb;
use App\Modules\System\Breadcrumbs\Models\BreadcrumbItem;

trait HasBreadcrumb
{
    protected $breadcrumb;

    /**
     *  Очищение хлебных крошек
     *
     * @return void
     */
    public function breadcrumb_clear()
    {
        if (empty($this->breadcrumb))
            $this->breadcrumb = App(Breadcrumb::class);
    }

    /**
     * Добавление хлебной крошки в контейнер
     *
     * @param string|null $link Ссылка
     * @param string $item Заголовок
     * @param bool $muted Убрать ссылку
     * @return void
     */
    public function breadcrumb_add(string|null $link, string $item, bool $muted = false)
    {
        if (empty($this->breadcrumb))
            $this->breadcrumb = App(Breadcrumb::class);

        $this->breadcrumb->add(new BreadcrumbItem($link, $item, $muted));
    }
}
