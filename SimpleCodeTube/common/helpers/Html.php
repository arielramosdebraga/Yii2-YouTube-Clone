<?php

namespace common\helpers;

use Yii;
use yii\helpers\Url;

/**
 * Class Html
 *
 * @package common\helpers
 */
class Html
{
    public static function channelLink($user, $schema = false)
    {
        $url = Yii::$app->params['frontendUrl'] . 'c/' . $user->username;
        return '<a href="'.$url.'" class="text-dark channel-link">' . $user->username . '</a>';
    }
}