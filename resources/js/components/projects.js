$(function() {
    'use strict';

    var selectedClass = "";

    $(".category").click(function() {
    	selectedClass = $(this).attr("data-rel");

        $(".projects__gallery").fadeTo(100, 0.1);
    	$(".projects__gallery div").not("."+selectedClass).fadeOut().removeClass('project__animation');

        setTimeout(function() {
            $("."+selectedClass).fadeIn().addClass('project__animation');
            $(".projects__gallery").fadeTo(300, 1);
        }, 300);

	});

});
