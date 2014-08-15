(function($) {
    $(window).load(fixContentHeight);

    function fixContentHeight()
    {
        var $content = $(".content_main");
        var $sidebar = $(".sidebar.first");
        var content_height = $content.height();
        var sidebar_height = $sidebar.height();

        if (content_height < sidebar_height)
        {
            $content.height(sidebar_height);
        }
        else
        {
            $sidebar.height(content_height);
        }
    }
}(jQuery));
