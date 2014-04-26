<?php
/**
 * Class Hark
 *
 * The core of the Hark Framework
 * @author Nathan J. Brauer
 * @web http://NathanBrauer.com
 * @project Hark Framework
 */

class HarkFiles {

	/**
	 * Recursively find all files and their last modified times
	 * Sorted last modified times
	 *
	 * @param $Directory
	 * @param array $files
	 * @return array
	 */
	static public function NewestFiles($Directory, array $files = array()) {
		$search = opendir($Directory);

		$dirs = array();
		while($item = readdir($search)) {
			if ($item == '.' || $item == '..') { continue; }
			if (is_dir($Directory.'/'.$item)) {
				$dirs[] = $Directory.'/'.$item;
			}
			if (is_file($Directory.'/'.$item)) {
				$files[$Directory.'/'.$item] = filemtime($Directory.'/'.$item);
			}
		}
		closedir($search);
		if (count($dirs) > 0) {
			foreach ($dirs as $dir) {
				$files += static::NewestFiles($dir,$files);
			}
		}
		arsort($files);
		return $files;
	}

	static public function LastModifiedFile($Directory) {
		$Files = static::NewestFiles($Directory);
		return array_slice($Files, 0, 1, true);
	}

}