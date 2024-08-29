<?php

class FormularSystemHooks {
    public static function onParserFirstCallInit(Parser $parser) {
        $parser->setHook('formular-system', [self::class, 'renderFormularSystemEmbed']);
    }

    public static function renderFormularSystemEmbed($input, array $args, Parser $parser, PPFrame $frame) {
        global $wgFormularSystemURL;

        if (!$wgFormularSystemURL) {
            return "Error: The FormularSystemURL is not set in LocalSettings.php.";
        }

        if (!isset($args['form'])) {
            return "Error: You must specify a 'form' parameter.";
        }

        $form = htmlspecialchars($args['form']);
        $iframeURL = htmlspecialchars($wgFormularSystemURL) . "/index.php?page=" . urlencode($form) . ".php&nav=wiki";

        $iframe = "<iframe id=\"formularIframe\" src=\"$iframeURL\" width=\"100%\" height=\"600px\" frameborder=\"0\" allowfullscreen></iframe>";

        // Lade das Skript über die MediaWiki ResourceLoader API
        $parser->getOutput()->addModules('ext.mwFormularSystem');

        return $iframe;
    }
}
