(function($) {
    var HEIGHT = 340;
    var timer;

    $(function(){
        imageSizing();
        $(window).resize(imageSizing);

        setActive(1);
        timer = setInterval(next, 4000);

        $(".view-header-slideshow .view-header a.prev").click(clickPrev);
        $(".view-header-slideshow .view-footer a.next").click(clickNext);
    });

    function container()
    {
        return $(".view-header-slideshow .view-content");
    }
    function rows()
    {
        return container().find(".views-row");
    }
    function row(i)
    {
        return rows().eq(i);
    }
    function activeRow()
    {
        return rows().filter(".active");
    }
    function width()
    {
        var windowWidth = $(window).width();
        if (windowWidth <= 768)
        {
            return windowWidth - 60;
        }
        return 660;
    }
    function imageSizing()
    {
        container().find("img").width(width());

        var $active = activeRow();
        if ($active.length)
        {
            setActive($active.index());
        }
    }

    function setActive(i)
    {
        row(i).addClass("active").css("opacity",1);
        container().css({
            "left":"-" + (i*width()) + "px"
        });
    }

    function next()
    {
        var $currentRow = activeRow();
        $currentRow.removeClass("active").animate({
            "opacity":0.5
        });

        var $next = $currentRow.next();
        if ($next.length == 0)
        {
            $next = $currentRow.parent().children().first();
        }
        $next.addClass("active").animate({
            "opacity":1
        });

        container().animate({
            "left":"-" + ($next.index()*width()) + "px"
        });
    }
    function prev()
    {
        var $currentRow = activeRow();
        $currentRow.removeClass("active").animate({
            "opacity":0.5
        });

        var $next = $currentRow.prev();
        if ($next.length == 0)
        {
            $next = $currentRow.parent().children().last();
        }
        $next.addClass("active").animate({
            "opacity":1
        });

        container().animate({
            "left":"-" + ($next.index()*width()) + "px"
        });
    }

    function clickPrev()
    {
        stop();
        prev();
        return false;
    }
    function clickNext()
    {
        stop();
        next();
        return false;
    }
    function stop()
    {
        clearInterval(timer);
    }
}(jQuery));
