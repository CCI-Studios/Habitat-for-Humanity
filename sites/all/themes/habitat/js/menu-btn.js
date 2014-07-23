(function($) {
    $(function(){
        $("#block-block-5 .content a").click(menuBtnClick);
    });

    function menuBtnClick()
    {
        $("#block-system-main-menu").slideToggle();

        return false;
    }
}(jQuery));
