<?php

/**
 * Simple Spoiler Extension for phpBB.
 * @author Alfredo Ramos <alfredo.ramos@yandex.com>
 * @copyright 2017 Alfredo Ramos
 * @license GNU GPL-2.0
 */

/**
 * @ignore
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
 * @ignore
 */
if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

$lang = array_merge($lang, [
	'SPOILER'			=> 'Spoiler',
	'SPOILER_HELPLINE'	=> 'Usage: [spoiler]text[/spoiler] or [spoiler=title]text[/spoiler]',
	'SPOILER_SHOW'		=> 'Show',
	'SPOILER_HIDE'		=> 'Hide'
]);
