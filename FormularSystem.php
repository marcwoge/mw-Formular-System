<?php
if (!defined('MEDIAWIKI')) {
    die('Not an entry point.');
}

$wgExtensionCredits['parserhook'][] = array(
    'name' => 'FormularSystem',
    'author' => 'Marc-Philipp Woge',
    'description' => 'Makes forms from Formular-System embedable into mediawiki',
    'version' => '1.0',
);

$wgHooks['ParserFirstCallInit'][] = 'FormularSystemHooks::onParserFirstCallInit';
