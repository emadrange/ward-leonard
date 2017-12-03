'use strict';

window.addEventListener('load', () => {

    tinymce.init({
        selector:'textarea.tinymce',
        themes: 'modern',
        width: 450,
        height: 300,
        plugins: 'textcolor colorpicker link',
        toolbar1: ' undo redo | formatselect | bold italic | forecolor backcolor | link',
        toolbar2: 'fontselect fontsizeselect | alignleft aligncenter alignright alignjustify'
    });

});