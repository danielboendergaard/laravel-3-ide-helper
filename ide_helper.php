<?php

/**
 * @method static bool guest() Determine if the user of the application is not logged in.
 * @method static bool check() Determine if the user is logged in.
 * @method static User|null user() Get the current user of the application.
 * @method static User|null retrieve(int $id) Get the a given application user by ID.
 * @method static bool attempt(array $arguments) Attempt to log a user into the application.
 * @method static bool login(mixed $token,bool $remember = false) Login the user assigned to the given token.
 */
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

/**
 * @method static array lists(string $name, string $key = null)
 * @method static \Laravel\Database\Query where(string $column, string $operator = null, mixed $value = null, string $connector = 'AND')
 * @method static \Laravel\Database\Query where_in(string $column, array $values, string $connector = 'AND', boolean $not = false)
 * @method static \Laravel\Database\Query with(string $column)
 * @method static \Laravel\Database\Query order_by(string $column, string $direction = 'asc')
 * @method static \Laravel\Database\Query take(int $value)
 * @method static \Laravel\Database\Query select(array $columns = array('*'))
 * @method static Eloquent find($id)
 *
 * @property $created_at
 * @property $updated_at
 */
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