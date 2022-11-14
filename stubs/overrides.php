<?php

class WP_CLI {
	/**
	 *
	 * @param string $name
	 * @param callable|class-string $callable
	 * @param array{
	 *     before_invoke?: callable,
	 *     after_invoke?: callable,
	 *     shortdesc?: string,
	 *     longdesc?: string,
	 *     synopsis?: string,
	 *     when?: string,
	 *     is_deferred?: bool
	 * } $args
	 * @return bool
	 */
	public static function add_command( string $name, $callable, array $args = [] ) {}

	/**
	 * @param string|WP_Error|Exception|Throwable $message
	 * @param bool|int $exit
	 * @return (
	 *     $exit is true
	 *     ? no-return
	 *     : null
	 * )
	 */
	public static function error( $message, $exit = true ) {}
}

class wpdb {
	/**
	 * @param string $query
	 * @param array<scalar>|scalar $args
	 * @return string|void
	 */
	public function prepare( $query, $args ) {}

	/**
	 * @param string|null $query
	 * @param 'ARRAY_A'|'ARRAY_N'|'OBJECT'|'OBJECT_K' $object
	 * @return (
	 *     $object is 'OBJECT'
	 *     ? list<ArrayObject<string, string>>
	 *     : ( $object is 'ARRAY_A'
	 *         ? list<array<string, scalar>>
	 *         : ( $object is 'ARRAY_N'
	 *             ? list<array<scalar>>
	 *             : array<string, ArrayObject<string, scalar>>
	 *           )
	 *       )
	 * )|null
	 */
	public function get_results( $query = null, $object = 'OBJECT' ) {}
}

/**
 * @return array{
 *   path: string,
 *   url: string,
 *   subdir: string,
 *   basedir: string,
 *   baseurl: string,
 *   error: string|false,
 * }
 */
function wp_get_upload_dir() {}

/**
 * @template TFilterValue
 * @param string $hook_name
 * @psalm-param TFilterValue $value
 * @return TFilterValue
 */
function apply_filters( string $hook_name, $value, ...$args ) {}

/**
 * @param string $url
 * @param int $component
 * @return (
 *     $component is -1
 *     ? array{
 *           path?: string,
 *           scheme?: string,
 *           host?: string,
 *           port?: int,
 *           user?: string,
 *           pass?: string,
 *           query?: string,
 *           fragment?: string
 *       }
 *     : string|int|false
 *  )
 */
function wp_parse_url( string $url, int $component = -1 ) {}

/**
 * @param string $option
 * @param mixed $default
 * @return mixed
 */
function get_option( string $option, $default = null ) {}

/**
 * @param string $path
 * @param 'https'|'http'|'relative'|'rest' $scheme
 * @return string
 */
function home_url( string $path = '', $scheme = null ) : string {}

/**
 * @template Args of array<array-key, mixed>
 * @template Defaults of array<array-key, mixed>
 * @psalm-param Args $args
 * @psalm-param Defaults $defaults
 * @psalm-return Defaults&Args
 */
function wp_parse_args( $args, $defaults ) {}

/**
 * @param WP_Error|mixed $error
 * @psalm-assert-if-true WP_Error $error
 */
function is_wp_error( $error ) : bool {}

/**
 * @template T
 * @template K
 * @param array<array-key, array<K, T>> $list
 * @param K $column
 * @return list<T>
 */
function wp_list_pluck( array $list, string $column, string $index_key = null ) : array {}
