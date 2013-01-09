<?php

/**
 * @method static bool guest() Determine if the user of the application is not logged in.
 * @method static bool check() Determine if the user is logged in.
 * @method static User|null user() Get the current user of the application.
 * @method static User|null retrieve(int $id) Get the a given application user by ID.
 * @method static bool attempt(array $arguments) Attempt to log a user into the application.
 * @method static bool login(mixed $token,bool $remember = false) Login the user assigned to the given token.
 * @method static logout() Log the user out of the driver's auth context.
 * @method static store(string $token) Store a user's token in the session.
 * @method static remember(string $token) Store a user's token in a long-lived cookie.
 * @method static string|null recall() Attempt to find a "remember me" cookie for the user.
 * @method static cookie(string $name, string $value, int $minutes) Store an authentication cookie.
 * @method static string token() Get session key name used to store the token.
 * @method static string recaller() Get the name used for the "remember me" cookie.
 * @method static string name() Get the name of the driver in a storage friendly format.
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

/**
 * @method static boolean has(string $key) Determine if an item exists in the cache
 * @method static mixed get(string $key, $default = null) Get an item from the cache
 * @method static put(string $key, $value, $minutes) Write an item to the cache for a given number of minutes
 * @method static mixed remember($key, $default, $minutes, $function = 'put') Get an item from the cache, or cache and return the default value
 * @method static forever(string $key, $value) Write an item to the cache for five years
 * @method static forget(string $key) Delete an item from the cache
 * @method static sear(string $key, $default) Get an item from the cache, or cache the default value forever
 */
class Cache extends Laravel\Cache {}
class Config extends Laravel\Config {}
class Controller extends Laravel\Routing\Controller {}
class Cookie extends Laravel\Cookie {}
class Crypter extends Laravel\Crypter {}

/**
 * @method static array query(string $sql, array $bindings = array()) Execute a SQL query and return an array of StdClass objects.
 * @method static transaction(Closure $callback) Execute a callback wrapped in a database transaction.
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
 * @method static \Laravel\Database\Query join(string $table, string $column1, string $operator = null, string $column2 = null, string $type = 'INNER')
 * @method static Eloquent find($id)
 * @method static int count()
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

/**
 * @method static void warning(string $message)
 * @method static void error(string $message)
 * @method static void info(string $message)
 */
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
 * @method static flush()
 */
class Session extends Laravel\Session {}
class Str extends Laravel\Str {}
class Task extends Laravel\CLI\Tasks\Task {}
class URI extends Laravel\URI {}
class Validator extends Laravel\Validator {}
class View extends Laravel\View {}