<?php

/*
 * This is a Flarum extension created by Billy Wilcosky.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 * For instructions, please view the README file.
 */

use Flarum\Extend;
use Flarum\Frontend\Document;
use s9e\TextFormatter\Configurator;

return [
    (new Extend\Frontend('forum'))
        ->content(function (Document $document) {
            $document->head[] = '<script src="../assets/extensions/zerosonesfun-lolight/lolight-1.4.0.min.js"></script>';
        }),
    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $config->BBCodes->addCustom(
                '[syntax]{TEXT}[/syntax]',
                '<div class="lolight">{TEXT}</div>'
            );
        })
];
