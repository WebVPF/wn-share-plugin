<?php namespace WebVPF\Share;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name'        => 'webvpf.share::lang.plugin.name',
            'description' => 'webvpf.share::lang.plugin.description',
            'author'      => 'WebVPF',
            'icon'        => 'icon-share-alt-square'
        ];
    }

    public function registerComponents()
    {
        return [
            'WebVPF\Share\Components\Buttons' => 'ShareButtons',
        ];
    }
}
