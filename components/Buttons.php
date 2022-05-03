<?php

namespace WebVPF\Share\Components;

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
            'btns' => [
                'title'       => 'webvpf.share::lang.buttons.title',
                'description' => 'webvpf.share::lang.buttons.desc',
                'type'        => 'string',
                'default'     => 'fb, tw, vk, ok, in, tg, vb, wa',
            ],
            'css' => [
                'title'       => 'webvpf.share::lang.css.title',
                'description' => 'webvpf.share::lang.css.desc',
                'type'        => 'checkbox',
                'default'     => true,
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
                    'custom'=> 'webvpf.share::lang.skin.custom',
                ],
            ],
        ];
    }

    public function onRun()
    {
        $str_btns = str_replace(' ', '', $this->property('btns') );
        
        $btns = explode(',', $str_btns);

        foreach ($btns as $key => $value) {
            if ( !in_array($value, ['fb', 'tw', 'vk', 'ok', 'in', 'tg', 'vb', 'wa']) ) {
                unset($btns[$key]);
            }
        }

        $this->page['shareBtns'] = $btns;

        if ( $this->property('css') ) {
            $this->addCss('/plugins/webvpf/share/assets/css/share-' . $this->property('skin') . '.css', 'WebVPF.Share');
        }

        $this->addJs('/plugins/webvpf/share/assets/js/share.min.js', 'WebVPF.Share');
    }
}
