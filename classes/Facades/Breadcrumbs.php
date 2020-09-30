<?php namespace SirikKoster\Breadcrumbs\Facades;

use Illuminate\Support\Collection;
use Illuminate\Support\HtmlString;
use SirikKoster\Breadcrumbs\BreadcrumbsManager;
use Illuminate\Support\Facades\Facade;
use stdClass;

/**
 * Class Breadcrumbs
 * Breadcrumbs facade - allows easy access to the Manager instance.
 *
 * @method static void for(string $name, callable $callback)
 * @method static void register(string $name, callable $callback)
 * @method static void before(callable $callback)
 * @method static void after(callable $callback)
 * @method static bool exists(string $name = NULL)
 * @method static Collection generate(string $name = NULL, ...$params)
 * @method static HtmlString view(string $view, string $name = NULL, ...$params)
 * @method static HtmlString render(string $name = NULL, ...$params)
 * @method static stdClass|null current()
 * @method static array getCurrentRoute()
 * @method static void setCurrentRoute(string $name, ...$params)
 * @method static void clearCurrentRoute()
 * @mixin \Illuminate\Support\Traits\Macroable
 * @see BreadcrumbsManager
 *
 * @author  Sirik Koster <sirik@sirikonline.com>
 * @package SirikKoster\Breadcrumbs\Facades
 */
class Breadcrumbs extends Facade
{
    /**
     * Get the name of the class registered in the Application container.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return BreadcrumbsManager::class;
    }
}
