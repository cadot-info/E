<?php
/*
 * Created on Wed Nov 03 2021 by The MIT License (MIT) Copyright (c) 2021 Cadot.info,licence: http://spdx.org/licenses/MIT.html webmestre@cadot.info
 *
 *
 *-------------------------------------------------------------------------- *
 *      E.php *
 * -------------------------------------------------------------------------- *
 *
 * Usage:
 * - E(string)
 * - use function CadotInfo\E;
 *
 * Source on: https://github.com/cadot-info/E
 */

namespace CadotInfo;

/**
 * E funtion for send message immediatly
 *
 * @param  string $texte
 * @return void
 */
function E(string $texte): void
{
    echo "- " . ucfirst($texte) . "\n";
    ob_flush();
}
