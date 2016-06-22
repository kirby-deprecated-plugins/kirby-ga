<?php
function ga() {
	$ga = new ga();
	return $ga->code;
}

class ga {
	public $code;

	public function __construct() {
		$this->code = $this->set();
	}

	private function isLoggedIn() {
		if( site()->user() ) return true;
	}

	private function isActive() {
		return c::get('plugin.ga', true);
	}

	private function isDebug() {
		return c::get('plugin.ga.debug', false);
	}

	private function templatePath() {
		return c::get('plugin.ga.template',  __DIR__ . DS . 'template.php');
	}

	private function ua() {
		return c::get('plugin.ga.id', false);
	}

	private function templateLoad() {
		return tpl::load( $this->templatePath(), [
			'page' => page(),
			'pages' => site()->children(),
			'site' => site(),
			'ua' => $this->ua(),
		] );
	}

	private function set() {
		if( ! $this->isActive() ) return false;
		if( $this->isDebug() ) return $this->templateLoad();
		if( $this->isLocalhost() ) return false;
		if( $this->isLoggedIn() ) return false;

		return $this->templateLoad();
	}

	private function blacklist() {
		return c::get('plugin.ga.blacklist', [ '127.0.0.1', '::1' ] );
	}

	private function isLocalhost() {
		return in_array( r::ip(), $this->blacklist() );
	}
}