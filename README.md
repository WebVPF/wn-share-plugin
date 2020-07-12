# Share

Share Buttons - plugin for October CMS. Plugin component displays share buttons.

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
- SVG icons are used for buttons, so there are no dependencies on icon fonts
- no external links
- there is no interaction with database
- optimized javascript file (826 B)
- without jQuery

## Button Style

Silver

![Silver](https://user-images.githubusercontent.com/61043464/75198717-f57cc980-5769-11ea-97c6-539071d1cb4e.jpg)

Color

![Silver](https://user-images.githubusercontent.com/61043464/75198720-f7468d00-5769-11ea-9627-4d81da355d3b.jpg)

With text

![Silver](https://user-images.githubusercontent.com/61043464/75198725-fa417d80-5769-11ea-801f-beb789e474c5.jpg)


Simple settings are available in the component settings.

## Paste buttons

If you work with code, you can insert buttons as follows:

```php
[ShareButtons]
css = 1
skin = "text"
fb = 1
tw = 1
vk = 1
ok = 1
in = 1
tg = 1
vb = 1
wa = 1
==
{% component 'ShareButtons' %}
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

### Values:

- 1 - enable
- 0 - disable

### Skins:

- `silver`
- `color`
- `text`
- `custom`

---

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

## Custom CSS

Create file `share-custom.css` and place it in folder `plugins/webvpf/share/assets/css/`. In component settings, select **Custom** item for Button Style.

### Disable css

You can completely disable predefined css in component settings. Styles can be placed in css themes or wherever convenient for you.

#### Disable in code

set 0 for css:

```php
[ShareButtons]
css = 0
fb = 1
==
{% component 'ShareButtons' %}
```
