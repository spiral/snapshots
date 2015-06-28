<?php
/**
 * Spiral Framework.
 *
 * @license   MIT
 * @author    Anton Titov (Wolfy-J)
 * @copyright ©2009-2015
 */
namespace Spiral\Facades;

use Spiral\Components\Http\Response\Redirect;
use Spiral\Components\Http\Router\RouteInterface;
use Spiral\Core\Container;
use Spiral\Core\Facade;

/**
 * @method static void registerMiddleware($alias, $middleware)
 * @method static void addRoute(RouteInterface $route)
 * @method static RouteInterface[] getRoutes()
 * @method static RouteInterface getRoute($route)
 * @method static RouteInterface|null activeRoute()
 * @method static string url($route, array $parameters = array())
 * @method static Redirect redirect($route, array $parameters = array())
 * @method static Router make($parameters = array(), Container $container = null)
 */
class Router extends Facade
{
    /**
     * Facade can statically represent methods of one binded component, such component alias or class
     * name should be defined in bindedComponent constant.
     */
    const COMPONENT = 'router';
}