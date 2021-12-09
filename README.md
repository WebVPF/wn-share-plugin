![Plugin version](https://img.shields.io/github/v/tag/WebVPF/wn-share-plugin?label=Version&logo=semver)
![Total installations](https://img.shields.io/packagist/dt/webvpf/wn-share-plugin?color=%23f28d1a&label=Installations&logo=Packagist&logoColor=%23f28d1a)

# Share

![plugin cover](https://repository-images.githubusercontent.com/242692501/3e44dc80-a1cd-11eb-83c4-e27c6ef0dc22)

Share Buttons - plugin for Winter CMS. Plugin component displays share buttons.

Инструкция на русском языке: https://github.com/WebVPF/wn-share-plugin/wiki

Installation Сomposer:

```
composer require webvpf/wn-share-plugin
```

### Social Networks and Messengers:

- Facebook
- Twitter
- VK
- Odnoklassniki
- LinkedIn
- Telegram
- Viber
- WhatsApp

### Features

- easy setup
- opens in a popup window or smartphone app
- not blocked by adblockers
- SVG icons are used for buttons, so there are no dependencies on icon fonts
- no external links
- there is no interaction with database
- optimized javascript file less than 1 Kb
- without jQuery

## Selecting and Sorting Buttons

Specify the id of the buttons that you want to display, separated by commas (fb, tw, vk, ok, in, tg, vb, wa)

![Silver](https://user-images.githubusercontent.com/61043464/112979788-b89bb700-9161-11eb-8698-81be8763e919.jpg)

In this case, you can specify the order in which the buttons will be displayed.

You can do a similar layout:

```html
<div>Share: {% component 'ShareButtons' %}</div>
```

or

```html
<div class="container">
    <h3>Share</h3>
    <div>{% component 'ShareButtons' %}</div>
</div>
```

---

## Button Style

Silver

![Silver](https://user-images.githubusercontent.com/61043464/75198717-f57cc980-5769-11ea-97c6-539071d1cb4e.jpg)

Color

![Color](https://user-images.githubusercontent.com/61043464/75198720-f7468d00-5769-11ea-9627-4d81da355d3b.jpg)

With text

![With text](https://user-images.githubusercontent.com/61043464/75198725-fa417d80-5769-11ea-801f-beb789e474c5.jpg)


Simple settings are available in the component settings.

## Custom CSS

Create file `share-custom.css` and place it in folder `plugins/webvpf/wn-share-plugin/assets/css/`. In component settings, select **Custom** item for Button Style.

### Disable css

You can completely disable predefined css in component settings. Styles can be placed in css themes or wherever convenient for you.

---

## Paste buttons

If you work with code, you can insert buttons as follows:

```php
[ShareButtons]
btns = "fb, tw, vk, ok, in, tg, vb, wa"
css = 1
skin = "text"
==
<div>Share: {% component 'ShareButtons' %}</div>
```

### Buttons:

- `fb` - Facebook
- `in` - LinkedIn
- `ok` - Odnoklassniki
- `tg` - Telegram
- `tw` - Twitter
- `vb` - Viber
- `vk` - VK
- `wa` - WhatsApp

### CSS:

- 1 - enable
- 0 - disable

### Skins:

- `silver`
- `color`
- `text`
- `custom`
