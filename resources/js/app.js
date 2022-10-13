import Alpine from 'alpinejs'
import persist from '@alpinejs/persist'

Alpine.plugin(persist)

window.Alpine = Alpine

Alpine.start()

import.meta.glob([
    '../images/**',
    '../fonts/**',
]);

/**
 * https://github.com/spatie/laravel-medialibrary/issues/2290#issuecomment-788217006
 */
window.refreshImages = () => {
    let images = document.querySelectorAll('img[srcset*="responsive-images"]');

    if (! images.length) {
        return;
    }

    window.requestAnimationFrame(() => {
        for (i = 0; i < images.length; i++) {
            let size = images[i].getBoundingClientRect().width;
            let sizes = Math.ceil(size / window.innerWidth * 100) + 'vw';
            images[i].sizes = sizes;
        }
    });
}