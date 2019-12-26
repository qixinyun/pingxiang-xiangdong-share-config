<?php
namespace SmartyConfig\Common;

class SmartyConfig
{
    public static function configDir()
    {
        $dirArray = array(
            S_ROOT.'vendor/qixinyun/pingxiang-xiangdong-share-config/src/SmartyConfig/Xd',
            S_ROOT.'vendor/qixinyun/pingxiang-xiangdong-share-config/src/SmartyConfig/Common',
            S_ROOT.'vendor/qixinyun/pingxiang-xiangdong-share-config/src/SmartyConfig/',
        );

        return $dirArray;
    }
}
