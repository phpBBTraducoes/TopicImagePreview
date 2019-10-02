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
	'ACP_TIP_TITLE'					=> 'Topic Image Preview',
	'ACP_TIP_DISPLAY_AGE'			=> 'Exibir imagens de',
	'ACP_TIP_DISPLAY_AGE_EXPLAIN'	=> 'Selecione Post mais recente para exibir as imagens mais recentes postadas. Caso contrário, selecione Post mais antigo para exibir as imagens mais antigas postadas.',
	'ACP_TIP_NEWEST_POST'			=> 'Post mais recente',
	'ACP_TIP_OLDEST_POST'			=> 'Post mais antigo',
	'ACP_TIP_DISPLAY_NUM'			=> 'Número de imagens a serem exibidas',
	'ACP_TIP_DISPLAY_NUM_EXPLAIN'	=> 'Número máximo de imagens a serem exibidas nas visualizações. Defina como 0 para desativar as visualizações.',
	'ACP_TIP_DISPLAY_DIM'			=> 'Tamanho máximo da imagem por visualização',
	'ACP_TIP_DISPLAY_DIM_EXPLAIN'	=> 'Largura/altura máxima de cada imagem na visualização.',
]);
