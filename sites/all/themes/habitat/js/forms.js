(function($) {
    var player;

    $(function(){
        var submitted = false;
        $('form').submit(function() {
            if (submitted) { return false; }
            else { submitted = true;}
        });
        
        var $container = $("#webform-component-what-kind-of-build-site-volunteer-activities-are-you-interested-in");

        $container.find(".form-item-submitted-what-kind-of-build-site-volunteer-activities-are-you-interested-in-cashier label")
        .append("<div class='description'>Operates the cash register, processes sales, answers the phone, ensure all sold items are marked and recorded.<br /><strong>Does not load or carry merchandise.</strong></div>");

        $container.find(".form-item-submitted-what-kind-of-build-site-volunteer-activities-are-you-interested-in-refurb label")
        .append("<div class='description'>Ensures donated items are in good working order, cleansand repairs items as necessary, maintains and develops merchandise displays, loads and unloads donations, prices and stocks shelves.<br /><strong>CSA-approved footwear required.</strong></div>");

        $container.find(".form-item-submitted-what-kind-of-build-site-volunteer-activities-are-you-interested-in-salvage label")
        .append("<div class='description'>Assists with salvage projects (such as kitchen cabinets)from various locations in the community.<br /><strong>CSA-approved footwear required.</strong></div>");

        $container.find(".form-item-submitted-what-kind-of-build-site-volunteer-activities-are-you-interested-in-cs label")
        .append("<div class='description'>Assists customers. Does not operate the cash register.<br /><strong>Does not load or carry merchandise.</strong></div>");

        $container.find(".form-item-submitted-what-kind-of-build-site-volunteer-activities-are-you-interested-in-admin label")
        .append("<div class='description'>Assists with administrative duties. Admin tasks require short-term volunteer assistance at various points in the year.</div>");

        youtubeSetup();
        fixEnterButton();
    });

    function youtubeSetup()
    {
        if (youtubePlayerOnPage())
        {
            loadYoutubeAPI();
            disableNextStep();
        }
    }
    function youtubePlayerOnPage()
    {
        return $("#youtube-player").length > 0;
    }

    function loadYoutubeAPI()
    {
        var tag = document.createElement('script');
        tag.src = "https://www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
    }

    function disableNextStep()
    {
        var toDisable = $("#edit-submitted-i-confirm-that-i-have-watched-this-video-in-its-entirety input, #edit-submitted-i-confirm-that-i-have-watched-this-video-in-its-entirety-2 input, #edit-submitted-i-confirm-i-have-watched-this-video-in-its-entirety input, #edit-next");
        if (!toDisable.is(":checked"))
        {
            toDisable.attr("disabled","true")
        }
    }
    
    function fixEnterButton()
    {
        $("form .webform-steps-wrapper").parents("form").find("input, select").on("keypress", function(e){
            if (e.keyCode == 13)
            {
                $("#edit-next").trigger("click");
                return false;
            }
        });
    }
}(jQuery));

function onYouTubeIframeAPIReady() {
    var videoid = jQuery("#youtube-player").data("src");
    player = new YT.Player('youtube-player', {
        height: '390',
        width: '640',
        videoId: videoid,
        playerVars: { 'controls': 0 },
        events: {
            'onStateChange': onPlayerStateChange
        }
    });
}

function onPlayerStateChange(event)
{
    if (event.data == YT.PlayerState.ENDED)
    {
        enableNextStep();
    }
}

function enableNextStep()
{
    jQuery("#edit-submitted-i-confirm-that-i-have-watched-this-video-in-its-entirety input, #edit-submitted-i-confirm-that-i-have-watched-this-video-in-its-entirety-2 input, #edit-submitted-i-confirm-i-have-watched-this-video-in-its-entirety input, #edit-next").prop("disabled","");
}
