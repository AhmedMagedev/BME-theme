/**
 * Front-end JavaScript
 *
 * The JavaScript code you place here will be processed by esbuild. The output
 * file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */
import Splide from '@splidejs/splide';
import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
import ui from '@alpinejs/ui';

window.Splide = Splide;
window.Alpine = Alpine;

Alpine.plugin(focus);
Alpine.plugin(ui);
Alpine.start();
