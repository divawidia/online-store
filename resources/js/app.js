import './bootstrap';
$(function () {
    $(document).scroll(function () {
        const $nav = $(".navbar-fixed-top");
        $nav.toggleClass("scrolled", $(this).scrollTop() > $nav.height());
    });

    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });

    CKEDITOR.replace("editor");
});
