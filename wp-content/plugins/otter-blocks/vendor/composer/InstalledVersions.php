<?php

namespace Composer;

use Composer\Semver\VersionParser;






class InstalledVersions
{
private static $installed = array (
  'root' => 
  array (
    'pretty_version' => '1.5.11',
    'version' => '1.5.11.0',
    'aliases' => 
    array (
    ),
    'reference' => NULL,
    'name' => 'codeinwp/otter-blocks',
  ),
  'versions' => 
  array (
    'codeinwp/gutenberg-animation' => 
    array (
      'pretty_version' => '1.0.7',
      'version' => '1.0.7.0',
      'aliases' => 
      array (
      ),
      'reference' => '76b7d1b2458148280dc03be8fe163a21bb0ee738',
    ),
    'codeinwp/gutenberg-blocks' => 
    array (
      'pretty_version' => '1.5.10',
      'version' => '1.5.10.0',
      'aliases' => 
      array (
      ),
      'reference' => 'df03e718e47b78468542eb0a1846cab97723b28e',
    ),
    'codeinwp/gutenberg-css' => 
    array (
      'pretty_version' => '1.0.11',
      'version' => '1.0.11.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e777778305b4a5e1572df55d5f70ecfe8bddf89a',
    ),
    'codeinwp/gutenberg-menu-icons' => 
    array (
      'pretty_version' => '1.0.4',
      'version' => '1.0.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '121ef82c57a556301265cbd1032d28619235e488',
    ),
    'codeinwp/otter-blocks' => 
    array (
      'pretty_version' => '1.5.11',
      'version' => '1.5.11.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'codeinwp/themeisle-sdk' => 
    array (
      'pretty_version' => '3.2.16',
      'version' => '3.2.16.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b116dffbe39ea9e37169fdd683bab54c545fe560',
    ),
    'masterminds/html5' => 
    array (
      'pretty_version' => '2.7.4',
      'version' => '2.7.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '9227822783c75406cfe400984b2f095cdf03d417',
    ),
    'tubalmartin/cssmin' => 
    array (
      'pretty_version' => 'v4.1.1',
      'version' => '4.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '3cbf557f4079d83a06f9c3ff9b957c022d7805cf',
    ),
  ),
);







public static function getInstalledPackages()
{
return array_keys(self::$installed['versions']);
}









public static function isInstalled($packageName)
{
return isset(self::$installed['versions'][$packageName]);
}














public static function satisfies(VersionParser $parser, $packageName, $constraint)
{
$constraint = $parser->parseConstraints($constraint);
$provided = $parser->parseConstraints(self::getVersionRanges($packageName));

return $provided->matches($constraint);
}










public static function getVersionRanges($packageName)
{
if (!isset(self::$installed['versions'][$packageName])) {
throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}

$ranges = array();
if (isset(self::$installed['versions'][$packageName]['pretty_version'])) {
$ranges[] = self::$installed['versions'][$packageName]['pretty_version'];
}
if (array_key_exists('aliases', self::$installed['versions'][$packageName])) {
$ranges = array_merge($ranges, self::$installed['versions'][$packageName]['aliases']);
}
if (array_key_exists('replaced', self::$installed['versions'][$packageName])) {
$ranges = array_merge($ranges, self::$installed['versions'][$packageName]['replaced']);
}
if (array_key_exists('provided', self::$installed['versions'][$packageName])) {
$ranges = array_merge($ranges, self::$installed['versions'][$packageName]['provided']);
}

return implode(' || ', $ranges);
}





public static function getVersion($packageName)
{
if (!isset(self::$installed['versions'][$packageName])) {
throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}

if (!isset(self::$installed['versions'][$packageName]['version'])) {
return null;
}

return self::$installed['versions'][$packageName]['version'];
}





public static function getPrettyVersion($packageName)
{
if (!isset(self::$installed['versions'][$packageName])) {
throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}

if (!isset(self::$installed['versions'][$packageName]['pretty_version'])) {
return null;
}

return self::$installed['versions'][$packageName]['pretty_version'];
}





public static function getReference($packageName)
{
if (!isset(self::$installed['versions'][$packageName])) {
throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}

if (!isset(self::$installed['versions'][$packageName]['reference'])) {
return null;
}

return self::$installed['versions'][$packageName]['reference'];
}





public static function getRootPackage()
{
return self::$installed['root'];
}







public static function getRawData()
{
return self::$installed;
}



















public static function reload($data)
{
self::$installed = $data;
}
}
