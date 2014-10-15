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
            $content.css("min-height", sidebar_height+"px");
        }
        else
        {
            $sidebar.css("min-height", content_height+"px");
        }
    }
}(jQuery));
