(function($) {
    $(function(){
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
        .append("<div class='description'>Assists with administrative duties. Admin tasks requireshort-term volunteer assistance at various points in the year.</div>");
    });
}(jQuery));
