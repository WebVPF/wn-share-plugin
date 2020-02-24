document.addEventListener('DOMContentLoaded', () => {
    let social = {
            fb: 'https://www.facebook.com/sharer.php?u=<URL>',
            in: 'https://www.linkedin.com/shareArticle?mini=true&url=<URL>',
            ok: 'https://connect.ok.ru/offer?url=<URL>',
            tg: 'https://t.me/share/url?url=<URL>',
            tw: 'https://twitter.com/share?url=<URL>',
            vb: 'viber://forward?text=<URL>',
            vk: 'https://vk.com/share.php?url=<URL>',
            wa: 'https://wa.me/?text=<URL>'
        }

    function share(id) {
        let left = (screen.width - 570) / 2 + (screen.availLeft | 0),
            top = (screen.height - 570) / 2 + (screen.availTop | 0),
            link = social[id].replace('<URL>', encodeURIComponent(document.URL)),
            params = 'menubar=no,toolbar=no,status=no,width=570,height=570,left=' + left + ',top=' + top;

        window.open(link, 'share', params);
    }
    
    document.querySelectorAll('[class^=share-]').forEach(el => el.addEventListener('click', () => share( el.className.split('-')[1] )));
});
