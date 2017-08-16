<?php

/**
 * Simple Spoiler Extension for phpBB.
 * @author Alfredo Ramos <alfredo.ramos@yandex.com>
 * @copyright 2017 Alfredo Ramos
 * Nederlandse vertaling @ Solidjeuh <https://www.froddelpower.be> 
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
	'SPOILER_HELPLINE'	=> 'Gebruik: [spoiler]tekst[/spoiler] of [spoiler=titel]tekst[/spoiler]',
	'SPOILER_SHOW'		=> 'Toon',
	'SPOILER_HIDE'		=> 'Verberg'
]);
