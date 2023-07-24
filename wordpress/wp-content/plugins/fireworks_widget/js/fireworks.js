/* fireworks.js */
/* JavaScript for the fireworks animation */
(function ($) {
    $(document).ready(function () {
        $('#fireworks-button').on('click', function () {
            for (let i = 0; i < 30; i++) {
                createFirework();
            }
        });

        function createFirework() {
            const firework = $('<div class="firework"></div>');
            const x = Math.random() * window.innerWidth;
            const y = Math.random() * window.innerHeight;

            firework.css({
                top: y + 'px',
                left: x + 'px',
            });

            $('.fireworks').append(firework);

            setTimeout(function () {
                firework.remove();
            }, 2000);
        }
    });
})(jQuery);
