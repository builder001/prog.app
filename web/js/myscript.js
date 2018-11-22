(function ($) {
    function setHeiHeight() {
        $('.height').css({
            height: $(window).height() + 'px'
        });
    }
    setHeiHeight(); // устанавливаем высоту окна при первой загрузке страницы
    $(window).resize( setHeiHeight ); // обновляем при изменении размеров окна
})(window.jQuery);
