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
        $iframeURL = htmlspecialchars($wgFormularSystemURL) . "/index.php?page=" . urlencode($form) . "&nav=wiki";

        return "<iframe src=\"$iframeURL\" width=\"100%\" height=\"600px\" frameborder=\"0\" allowfullscreen></iframe>";
    }
}
