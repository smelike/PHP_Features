
think\Request.php



protected static $instance;
protected $method;
protected $domain; // 域名，含协议和端口
protected $url; // URL 地址
protected $baseUrl; // 基础地址
protected $baseFile; // 当前执行文件
protected $root;
protected $pathinfo;
protected $path;
protected $routeInfo = [];

protected $dispatch = [];
protected $module;
protected $controller;
protected $action;
protected $langset;

protected $param = [];
protected $get = [];
protected $post = [];
protected $request = [];
protected $route = [];
protected $put;
protected $session = [];
protected $file = [];
protected $cookie = [];
protected $server = [];
protected $header = [];

protected $mimeType = [];
protected $content;
protected $filter;
protected static $hook = [];
protected $bind = [];
protected $input;
protected $cache;
protected $isCheckCache;


// array_unshift - array_unshift — Prepend one or more elements to the beginning of an array
// property_exists — Checks if the object or class has a property
protected function __construct($options = []) {
	
	foreach($options as $name => $item) {
		if (property_exists($this, $name)) {
			$this->$name = $item;
		}
	}
	if (is_null($this->filter)) {
		$this->filter = Config::get('default_filter');
	}
	
	$this->input = file_get_contents('php://input');
}



__call($method, $args)
	// array_key_exists()
	// array_unshift
	// call_user_func_array

hoook($method, $callback = null)
	// array_merge()
	
	
public static function  instance($options = []) {
	if (is_null(self::$instance)) {
		self::$instance = new static($options)
	}
	return self::$instance;
} 


// 创建一个 URL 请求数据
public static function create() {}

// 设置或获取包含协议的域名
public function domain() {}

// 设置或获取当前完整 URL
public function url() {}

public function baseUrl() {}

public function baseFile() {}

public function root() {}


public function pathinfo() {}

public function path() {}

public function ext() {}

public function time() {}

public function type() {}
// stristr($accept, $v)
// Returns all of haystack starting from and including the first occurrence of needle to the end.
// stristr — Case-insensitive strstr()
// binary safe

public function mimeType() {}

public function method() {}

public function isGet() {}

public function isPost() {}

public function isPut() {}

public function isDelete() {}

public function isHead() {}

public function isOptions() {}

public function isCli() {}

public function isCgi() {}
// strpos — Find the position of the first occurrence of a substring in a string
// This function is binary-safe.

public function param() {}

public function route() {}

public function get($name = '', $default = null, $filter = '') {}

public function post() {}

public function put() {}

public function delete() {}

public function patch() {}

public function request() {}

public function session() {}

public function cookie() {}

public function server() {}

public function file() {}

public funtion env() {}

public function header($name = '', $default = null) {}

public function input ($data = [], $name = '', $default = null, $filter = '') {}

// strpos()
// list()
// is_object()
// array_walk_recursive()
//   array_walk_recursive($data, [$this, 'filterValue'], $filter);
// reset($data);

public function filter() {}

public function getFilter() {}

public function filterValue() {}
// is_callablee()
// is_scalar()
// preg_match()
// filter_var()

public function filterExp() {}

public function typeCast() {}

public function has() {}

public function only() {}

public function except() {}

public function isSsl() {}

public function isAjax() {}

public function ip() {}

public function isMobile() {}

public function scheme() {}

public function query() {}

public function host() {}

public function port() {}

public function protocol() {}

public function remotePort() {}

public function contentType() {}

public function routeInfo() {}

public function dispatch() {}

public function module() {}

public function controller() {}

public function action() {}

public function langset() {}

public function getContent() {}

public function getInput() {}

public function token() {}

public function cache() {}

public function getCache() {}

public function bind() {}

public function __set() {}

public function __get() {}

public functionn __isset() {}
