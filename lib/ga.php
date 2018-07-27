<?php
class ga {
	public static function allowed() {
		$visitor = new Kirby\Http\Visitor();

		if(! option('jenstornell.ga.id')) return false;
		if(! option('jenstornell.ga.active')) return false;
		if(option('jenstornell.ga.debug')) return true;
		if(in_array($visitor->ip(), option('jenstornell.ga.blacklist'))) return false;
		//if(site()->user()) return false;
		return true;
	}
}