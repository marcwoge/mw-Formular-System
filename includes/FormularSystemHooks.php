<?php

class FormularSystemHooks {
    public static function onParserFirstCallInit(Parser $parser) {
        $parser->setHook('formular-system', [self::class, 'renderFormularSystemEmbed']);
    }

    public static function renderFormularSystemEmbed($input, array $args, Parser $parser, PPFrame $frame) {
        global $wgFormularSystemURL, $wgFormularSystemIgnoreSSLCertificate;

        if (!$wgFormularSystemURL) {
            return "Error: The FormularSystemURL is not set in LocalSettings.php.";
        }

        if (!isset($args['form'])) {
            return "Error: You must specify a 'form' parameter.";
        }

        $form = htmlspecialchars($args['form']);
        $iframeURL = htmlspecialchars($wgFormularSystemURL) . "/index.php?page=" . urlencode($form) . ".php&nav=wiki";

        // cURL verwenden, um den Inhalt zu laden
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $iframeURL);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // SSL-Zertifikatprüfung deaktivieren, falls eingestellt
        if ($wgFormularSystemIgnoreSSLCertificate) {
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        }

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            return "Error loading form: " . curl_error($ch);
        }

        curl_close($ch);

        // Rendere das iFrame mit dem geladenen Inhalt
        return "<iframe src=\"$iframeURL\" width=\"100%\" height=\"600px\" frameborder=\"0\" allowfullscreen></iframe>";
    }
}
