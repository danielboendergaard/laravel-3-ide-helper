<?php

class Auth extends Laravel\Auth {}

/**
 * @method static add(string $name, string $source, array $dependencies = array(), array $attributes = array())
 * @method static string styles()
 * @method static string scripts()
 */
class Asset extends Laravel\Asset {}
class Autoloader extends Laravel\Autoloader {}
class Blade extends Laravel\Blade {}
class Bundle extends Laravel\Bundle {}
class Cache extends Laravel\Cache {}
class Config extends Laravel\Config {}
class Controller extends Laravel\Routing\Controller {}
class Cookie extends Laravel\Cookie {}
class Crypter extends Laravel\Crypter {}

/**
 * @method static Laravel\Database\Query table(string $table)
 * @method static array query(string $sql, array $bindings = array())
 */
class DB extends Laravel\Database {}
class Eloquent extends  Laravel\Database\Eloquent\Model {}
class Event extends Laravel\Event {}
class File extends Laravel\File {}
class Filter extends Laravel\Routing\Filter {}
class Form extends Laravel\Form {}
class Hash extends Laravel\Hash {}
class HTML extends Laravel\HTML {}
class Input extends Laravel\Input {}
class IoC extends Laravel\IoC {}
class Lang extends Laravel\Lang {}
class Log extends Laravel\Log {}
class Memcached extends Laravel\Memcached {}
class Paginator extends Laravel\Paginator {}
class Profiler extends Laravel\Profiling\Profiler {}
class URL extends Laravel\URL {}
class Redirect extends Laravel\Redirect {}
class Redis extends Laravel\Redis {}
class Request extends Laravel\Request {}
class Response extends Laravel\Response {}
class Route extends Laravel\Routing\Route {}
class Router extends Laravel\Routing\Router {}
class Schema extends Laravel\Database\Schema {}
class Section extends Laravel\Section {}

/**
 * @method static boolean has(string $key)
 * @method static get(string $key, $default = null)
 * @method static put(string $key, $value)
 * @method static flash(string $key, $value)
 * @method static forget(string $key)
 * @method static reflash()
 */
class Session extends Laravel\Session {}
class Str extends Laravel\Str {}
class Task extends Laravel\CLI\Tasks\Task {}
class URI extends Laravel\URI {}
class Validator extends Laravel\Validator {}
class View extends Laravel\View {}
?>  