<?php

/*
 * This is a Flarum extension created by Billy Wilcosky.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 * For instructions, please view the README file.
 */

use Flarum\Extend;
use s9e\TextFormatter\Configurator;

return [
    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $config->BBCodes->addCustom(
                '[syntax]{TEXT}[/syntax]',
                '<pre class="lolight">{TEXT}</pre>
                 <script src="../assets/extensions/zerosonesfun-lolight/lolight-1.4.0.min.js"></script>'
            );
        })
];
