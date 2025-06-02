const socialUrl = {
    fb: 'https://www.facebook.com/sharer.php?u=<URL>',
    in: 'https://www.linkedin.com/shareArticle?mini=true&url=<URL>',
    ok: 'https://connect.ok.ru/offer?url=<URL>',
    tg: 'https://t.me/share/url?url=<URL>',
    tw: 'https://twitter.com/share?url=<URL>',
    vb: 'viber://forward?text=<URL>',
    vk: 'https://vk.com/share.php?url=<URL>',
    wa: 'https://wa.me/?text=<URL>'
}

/**
 * Sends a link to a page to the specified social network
 *
 * @param {string} id Social network ID (fb, tw, vk, ok, in, tg, vb, wa)
 * @param {object} paramUrl Optional parameter. Search and hash key values add parameters to the link.
 */
function share(id, paramUrl = {}) {
    let pageUrl = document.URL;

    if (typeof paramUrl == 'object') {
        if (paramUrl.search) pageUrl += '?' + paramUrl.search;
        if (paramUrl.hash) pageUrl += '#' + paramUrl.hash;
    }

    let left = (screen.width - 570) / 2 + (screen.availLeft | 0),
        top = (screen.height - 570) / 2 + (screen.availTop | 0),
        link = socialUrl[id].replace('<URL>', encodeURIComponent(pageUrl)),
        params = 'menubar=no,toolbar=no,status=no,width=570,height=570,left=' + left + ',top=' + top;

    window.open(link, 'share', params);
}

document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('[class^=share-]').forEach(el => el.addEventListener('click', () => share( el.className.split('-')[1] )));
});
