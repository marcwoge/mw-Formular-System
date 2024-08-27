<?php
if (!defined('MEDIAWIKI')) {
    die('Not an entry point.');
}

$wgExtensionCredits['parserhook'][] = array(
    'name' => 'FormularSystem',
    'author' => 'Marc-Philipp Woge',
    'description' => 'Ermöglicht das Einbetten von Formularen aus dem Formular-System',
    'version' => '1.0',
);

$wgHooks['ParserFirstCallInit'][] = 'wfFormularSystemEmbed';

function wfFormularSystemEmbed(Parser $parser) {
    $parser->setHook('formular-system', 'renderFormularSystemEmbed');
    return true;
}

function renderFormularSystemEmbed($input, array $args, Parser $parser, PPFrame $frame) {
    global $wgFormularSystemURL;

    if (!isset($wgFormularSystemURL)) {
        return "Error: The FormularSystemURL is not set in LocalSettings.php.";
    }

    if (!isset($args['form'])) {
        return "Error: You must specify a 'form' parameter.";
    }

    $form = htmlspecialchars($args['form']);
    $iframeURL = htmlspecialchars($wgFormularSystemURL) . "/index.php?page=" . urlencode($form) . "&nav=wiki";

    $iframe = "<iframe src=\"$iframeURL\" width=\"100%\" height=\"600px\" frameborder=\"0\" allowfullscreen></iframe>";

    return $iframe;
}
