<?php namespace WebVPF\Share\Components;

use Cms\Classes\ComponentBase;

class Buttons extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'webvpf.share::lang.component.name',
            'description' => 'webvpf.share::lang.component.description'
        ];
    }

    public function defineProperties()
    {
        return [
            'css' => [
                'title'       => 'webvpf.share::lang.css.title',
                'description' => 'webvpf.share::lang.css.desc',
                'type'        => 'checkbox',
                'default'     => true
            ],
            'skin' => [
                'title'       => 'webvpf.share::lang.skin.title',
                'description' => 'webvpf.share::lang.skin.desc',
                'type'        => 'dropdown',
                'default'     => 'silver',
                'placeholder' => 'Стиль кнопок',
                'options'     => [
                    'silver'=> 'webvpf.share::lang.skin.silver',
                    'color' => 'webvpf.share::lang.skin.color',
                    'text'  => 'webvpf.share::lang.skin.text',
                    'custom'=> 'webvpf.share::lang.skin.custom'
                ]
            ],
            'fb' => [
                'title'       => 'webvpf.share::lang.buttons.fb.name',
                'description' => 'webvpf.share::lang.buttons.fb.desc',
                'type'        => 'checkbox',
                'default'     => false,
                'group'       => 'webvpf.share::lang.buttons.title'
            ],
            'tw' => [
                'title'       => 'webvpf.share::lang.buttons.tw.name',
                'description' => 'webvpf.share::lang.buttons.tw.desc',
                'type'        => 'checkbox',
                'default'     => false,
                'group'       => 'webvpf.share::lang.buttons.title'
            ],
            'vk' => [
                'title'       => 'webvpf.share::lang.buttons.vk.name',
                'description' => 'webvpf.share::lang.buttons.vk.desc',
                'type'        => 'checkbox',
                'default'     => false,
                'group'       => 'webvpf.share::lang.buttons.title'
            ],
            'ok' => [
                'title'       => 'webvpf.share::lang.buttons.ok.name',
                'description' => 'webvpf.share::lang.buttons.ok.desc',
                'type'        => 'checkbox',
                'default'     => false,
                'group'       => 'webvpf.share::lang.buttons.title'
            ],
            'in' => [
                'title'       => 'webvpf.share::lang.buttons.in.name',
                'description' => 'webvpf.share::lang.buttons.in.desc',
                'type'        => 'checkbox',
                'default'     => false,
                'group'       => 'webvpf.share::lang.buttons.title'
            ],
            'tg' => [
                'title'       => 'webvpf.share::lang.buttons.tg.name',
                'description' => 'webvpf.share::lang.buttons.tg.desc',
                'type'        => 'checkbox',
                'default'     => false,
                'group'       => 'webvpf.share::lang.buttons.title'
            ],
            'vb' => [
                'title'       => 'webvpf.share::lang.buttons.vb.name',
                'description' => 'webvpf.share::lang.buttons.vb.desc',
                'type'        => 'checkbox',
                'default'     => false,
                'group'       => 'webvpf.share::lang.buttons.title'
            ],
            'wa' => [
                'title'       => 'webvpf.share::lang.buttons.wa.name',
                'description' => 'webvpf.share::lang.buttons.wa.desc',
                'type'        => 'checkbox',
                'default'     => false,
                'group'       => 'webvpf.share::lang.buttons.title'
            ]
        ];
    }

    public function onRun()
    {
        $properties = $this->getProperties();
        unset($properties['css'], $properties['skin']);
        $this->page['share'] = $properties;

        if ( $this->property('css') ) {
            $this->addCss('/plugins/webvpf/share/assets/css/share-' . $this->property('skin') . '.css');
        }

        $this->addJs('/plugins/webvpf/share/assets/js/share.min.js');
    }
}
