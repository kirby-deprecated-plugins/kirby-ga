<?php
class ga {
	public static function allowed() {
		$GAClass = new GAClass();

		if( ! $GAClass->ua() ) return false;
		if( ! $GAClass->isActive() ) return false;
		if( $GAClass->isDebug() ) return true;
		if( $GAClass->isLocalhost() ) return false;
		if( $GAClass->isLoggedIn() ) return false;
		return true;
	}
}

class GAClass {
	public function isLoggedIn() {
		if( site()->user() ) return true;
	}

	public function isActive() {
		return c::get('plugin.ga', true);
	}

	public function isDebug() {
		return c::get('plugin.ga.debug', false);
	}

	public function ua() {
		return c::get('plugin.ga.id', false);
	}

	public function blacklist() {
		return c::get('plugin.ga.blacklist', [ '127.0.0.1', '::1' ] );
	}

	public function isLocalhost() {
		return in_array( r::ip(), self::blacklist() );
	}
}