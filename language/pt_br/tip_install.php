<?php
/**
 *
 * Topic Image Preview. An extension for the phpBB Forum Software package.
 * Brazilian Portuguese translation by eunaumtenhoid [2019][ver 1.0.0] (https://github.com/phpBBTraducoes)
 * @copyright (c) 2017, Matt Friedman
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

$lang = array_merge($lang, [
	'TIP_INSTALL_ERROR'	=> 'É necessário o phpBB %s ou mais recente.', 
]);

// TRANSLATORS CAN IGNORE THIS.
// Overwrite core error message keys with a more specific message.
$lang = array_merge($lang, [
	'EXTENSION_NOT_ENABLEABLE'		=> isset($lang['EXTENSION_NOT_ENABLEABLE']) ?
		$lang['EXTENSION_NOT_ENABLEABLE'] . '<br />' . sprintf($lang['TIP_INSTALL_ERROR'], \vse\TopicImagePreview\ext::PHPBB_MIN_VERSION) :
		null,
	'CLI_EXTENSION_ENABLE_FAILURE'	=> isset($lang['CLI_EXTENSION_ENABLE_FAILURE']) ?
		$lang['CLI_EXTENSION_ENABLE_FAILURE'] . '. ' . sprintf($lang['TIP_INSTALL_ERROR'], \vse\TopicImagePreview\ext::PHPBB_MIN_VERSION) :
		null,
]);
