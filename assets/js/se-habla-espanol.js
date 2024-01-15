(function ($) {
    $(document).ready(function () {
        if (!$('.se-habla-espanol')?.length) return;
        const notShow = window.localStorage.getItem('app-show-se-habla-espanol');
        if (notShow === 'true') return;
        window.onload = () => $('.se-habla-espanol').fadeIn('fast').removeClass('hidden');
        if ($('.se-habla-espanol [role=close-se-habla-espanol]')?.length) $('.se-habla-espanol [role=close-se-habla-espanol]').on('click', function () {
            $(this).closest('.se-habla-espanol').fadeOut('fast').addClass('hidden');
        });
        if ($('.se-habla-espanol [role=never-show-se-habla-espanol]')?.length) $('.se-habla-espanol [role=never-show-se-habla-espanol]').on('click', function () {
            window.localStorage.setItem('app-show-se-habla-espanol', true);
            $(this).closest('.se-habla-espanol').fadeOut('fast').addClass('hidden');
        })
    });
})(jQuery);