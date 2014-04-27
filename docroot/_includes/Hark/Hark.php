<?php
/**
 * The core of the Hark Framework
 *
 * @author Nathan J. Brauer
 * @web http://NathanBrauer.com
 * @project Hark Framework
 */
class Hark {

	static private $IsInitiated = false;

	static public function Init() {
		if (static::$IsInitiated) {
			error_log('FUNCTION Hark::Init MAY ONLY BE LOADED ONCE.');
			die('FUNCTION Hark::Init MAY ONLY BE LOADED ONCE.');
		}
		static::$IsInitiated = true;
		ob_start();
	}

	/**
	 * Call immediately after content has ended
	 * @param array $args Array of variables accessible to the template
	 * @param string $theme Theme to use (E.g. /_template/this-is-the-theme)
	 * @param string $template Template to use (E.g. /_template/this-is-the-theme/template.php)
	 */
	static public function Deploy($args=array(),$template='Default',$theme='Default') {
		if (!static::$IsInitiated) {
			error_log('FUNCTION init_content MUST BE LOADED BEFORE init_template.');
			die('FUNCTION init_content MUST BE LOADED BEFORE init_template.');
		}
		if (strpos($template,'..') !== false) {
			die('Template file MUST be located in _template. Any other attempt to access it will be thwarted. Boo-ya!');
		}

		extract($args);

		$CONTENT = ob_get_contents();
		ob_end_clean();

		/**
		 * Prevent variables which haven't been set yet from error-ing (PHP Notices).
		 * Even if you mute notices, they will flood the error logs -- this solution prevents that.
		 */
		foreach ($Files = HarkFiles::NewestFiles($_SERVER['DOCUMENT_ROOT'] .'/_template') as $______Path => $mtime) {
			if (substr($______Path,-4) !== '.php') continue;
			foreach (array_filter(token_get_all(file_get_contents($______Path)),function($t){ return $t[0] === T_VARIABLE; }) as $______var_data) {
				$var = preg_replace('/^\$/','',$______var_data[1]);
				if (isset($$var)) continue;
				if (strpos($var,'_') === 0) continue; //global var -- don't touch.
				$$var = null;
			}
		}

		require_once($_SERVER['DOCUMENT_ROOT'] . '/_template/'.$theme.'/'.$template.'.php');
	}

	/**
	 * Build the body classes dynamically
	 * @param array $Classes Additional classes to include
	 */
	static public function BodyClasses($Classes=array()) {

		$clean_URL = strtolower($_SERVER['REQUEST_URI']);
		if (strpos($clean_URL,'?')) {
			list($clean_URL,) = explode('?',$clean_URL,2);
		}
		if (substr($clean_URL,-4) === '.php' || substr($clean_URL,-4) === '.htm') {
			$clean_URL = substr($clean_URL,0,-4);
		}
		if (substr($clean_URL,-5) === '.html') {
			$clean_URL = substr($clean_URL,0,-5);
		}

		$clean_URL = preg_replace('/[^a-z0-9_\/-]+/','-',$clean_URL); //remove any non-standard characters
		$clean_URL = preg_replace('/[_-][_-]+/','_',$clean_URL); //replace "-_" "_-" "--" "__" (or longer variations) with a single "_"
		$URL_Pieces = explode('/',$clean_URL);
		foreach ($URL_Pieces as $piece) {
			if (!$piece) continue;
			if (is_numeric($piece[0])) {
				// If the piece starts with a number, prefix it with n_
				//    (Classes must start with a letter (until CSS3))
				$Classes[] = 'n_'.$piece;
			} else {
				$Classes[] = $piece;
			}
		}

		if (end($URL_Pieces) === 'index' || end($URL_Pieces) === '') {
			array_pop($URL_Pieces); //remove empty element
			if (!$Current = end($URL_Pieces)) {
				$Current = 'root';
			}
			$Classes[] = $Current.'-index';
		}

		return implode(' ',$Classes);
	}


	/**
	 * Determine canonical URL based current file path
	 * An option is provided to override this
	 *
	 * @return string path to current file
	 */
	static public function CanonicalURL() {
		$REQUEST_URI = $_SERVER['REQUEST_URI'];
		$path = pathinfo($REQUEST_URI);
		if (strpos($path['basename'],'?') !== false) {
			list($path['basename'],) = explode('?',$path['basename'],2);
			list($REQUEST_URI,) = explode($path['basename'].'?',$REQUEST_URI,2);
			$REQUEST_URI .= $path['basename'];
			$path = pathinfo($REQUEST_URI);
		}

		if ($path['dirname'] === '/' && ($path['basename'] === "index.php" || $path['basename'] === "index.html" || $path['basename'] === "index.htm")) {
			$path = $path['dirname'];
		} else if ($path['basename'] === "index.php" || $path['basename'] === "index.html" || $path['basename'] === "index.htm") {
			$path = $path['dirname'] . '/';
		} else {
			$path = $REQUEST_URI;
		}
		return HarkConfig::HomeURL().$path;
	}

	/**
	 * Appends the site version or the file's last modified time to the URL
	 *
	 * @param string $Path Relative to DOCUMENT_ROOT
	 * @param string $URL
	 * @return string
	 */
	static public function CacheBuster($Path,$URL='',$Return=false) {
		if (!$URL) $URL = $Path;

		if (!$Append = HarkConfig::SiteVersion()) {
			if (file_exists($_SERVER['DOCUMENT_ROOT'].$Path)) {
				$FinalPath = $_SERVER['DOCUMENT_ROOT'].$Path;
			} else if (file_exists(HarkConfig::ThemePath().'/'.ltrim($Path,'/'))) {
				$FinalPath = HarkConfig::ThemePath().'/'.ltrim($Path,'/');
				$URL = HarkConfig::ThemeURL().'/'.ltrim($Path,'/');
			}
			if (isset($FinalPath)) {
				$Append = filemtime($FinalPath);
			} else {
				if ($Return) {
					return $URL;
				} else {
					echo $URL;
					return null;
				}
			}
		}

		$Final = (strpos($URL,'?') !== false) ? $URL.'&'.$Append : $URL.'?'.$Append;
		if ($Return) return $Final;
		echo $Final;
	}

}