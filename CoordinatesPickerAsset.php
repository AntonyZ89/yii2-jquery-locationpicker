<?php
namespace antonyz89\locationpicker;
use yii\web\View;
use yii\base\InvalidConfigException;
/**
 * LocationPickerAsset
 *
 * @author pigo
 */
class CoordinatesPickerAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@antonyz89/locationpicker/assets';
    public $css = [
        'coordinates-picker.css'
    ];
}
