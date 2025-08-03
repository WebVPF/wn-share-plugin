# Share

Share Buttons - plugin for Winter CMS. Plugin component displays share buttons.

Инструкция на русском языке: https://github.com/WebVPF/wn-share-plugin/wiki

Installation Сomposer:

```bash
composer require webvpf/wn-share-plugin
```

Social Networks and Messengers:

- Facebook
- Twitter
- VK
- Odnoklassniki
- LinkedIn
- Telegram
- Viber
- WhatsApp
- X

Features:

- easy setup
- opens in a popup window or smartphone app
- not blocked by adblockers
- SVG icons are used for buttons, so there are no dependencies on icon fonts
- no external links
- there is no interaction with database
- optimized [javascript file](https://github.com/WebVPF/wn-share-plugin/blob/master/assets/js/share.min.js "open file") less than 1 Kb
- without jQuery

## Selecting and Sorting Buttons

Specify the id of the buttons that you want to display, separated by commas (fb, tw, vk, ok, in, tg, vb, wa, x)

![Component Share Buttons](https://user-images.githubusercontent.com/61043464/112979788-b89bb700-9161-11eb-8698-81be8763e919.jpg)

In this case, you can specify the order in which the buttons will be displayed.

You can do a similar layout:

```twig
<div>Share: {% component 'ShareButtons' %}</div>
```

or

```twig
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

## Disable css

You can completely disable predefined css in component settings. Styles can be placed in css themes or wherever convenient for you.

---

## Paste buttons

If you work with code, you can insert buttons as follows:

```ini
[ShareButtons]
btns = "fb, tw, vk, ok, in, tg, vb, wa, x"
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
- `x` - X

### CSS:

- 1 - enable
- 0 - disable

### Skins:

- `silver`
- `color`
- `text`

## Function `share`

You can call the `share()` function from within your scripts.

```js
share(id, paramsUrl);
```

Parameter   | Type   | Required | Description
------------|--------|----------|------------
`id`        | string | Yes      | Social network ID (fb, tw, vk, ok, in, tg, vb, wa, x)
`paramsUrl` | object | No       | Can have `search` and `hash` options.

### Examples

The following example will send a page link to the Telegram messenger.

```js
share('tg');

// https://example.com/slug
```

#### `search` parameter

Part of the address after `?`

```js
share('wa', {search: 'a=2&b=3'});

// https://example.com/slug?a=2&b=3
```

#### `hash` parameter

The part of the URL that comes after the pound sign '#'

```js
share('wa', {hash: 'anchor'});

// https://example.com/slug#anchor
```

#### `search` and `hash` parameters

```js
share('wa', {search: 'a=2&b=3', hash: 'anchor'});

// https://example.com/slug?a=2&b=3#anchor
```
