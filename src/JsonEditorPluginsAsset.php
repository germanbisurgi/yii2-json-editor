<?php
/**
 * @link http://www.diemeisterei.de/
 * @copyright Copyright (c) 2018 diemeisterei GmbH, Stuttgart
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace dmstr\jsoneditor;

use yii\web\AssetBundle;

class JsonEditorPluginsAsset extends AssetBundle
{
    public $sourcePath = '@dmstr/jsoneditor/assets/';

    public $js = [
        'selectizes.js',
    ];

}