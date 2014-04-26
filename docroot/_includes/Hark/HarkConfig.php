<?php
/**
 * Manage the configuration options for the Hark Framework
 *
 * @author Nathan J. Brauer
 * @web http://NathanBrauer.com
 * @project Hark Framework
 */

class HarkConfig {

	static private $SiteVersion = false;
	static public function SiteVersion($version=false) {
		if (!static::$SiteVersion && $version) {
			static::$SiteVersion = $version;
		}
		return static::$SiteVersion;
	}

	static private $Theme = false;
	static public function Theme($Theme='Default') {
		if (!static::$Theme) {
			static::$Theme = trim($Theme,'/');
		}
		return static::$Theme;
	}

	static private $HomeURL = false;
	static public function HomeURL($URL=false) {
		if (!static::$HomeURL) {
			if ($URL) {
				static::$HomeURL = rtrim($URL,'/');
			} else {
				static::$HomeURL = 'http://'.$_SERVER['HTTP_HOST'];
			}
		}
		return static::$HomeURL;
	}

	static private $CanonicalHomeURL = false;
	static public function CanonicalHomeURL($URL=false) {
		if (!static::$CanonicalHomeURL) {
			if ($URL) {
				static::$CanonicalHomeURL = rtrim($URL,'/');
			} else {
				static::$CanonicalHomeURL = 'http://'.$_SERVER['HTTP_HOST'];
			}
		}
		return static::$CanonicalHomeURL;
	}

	static public function ThemeURL() {
		return static::HomeURL().'/'.static::ThemePath();
	}

	static public function ThemePath() {
		return '_template/'.static::Theme();
	}

}