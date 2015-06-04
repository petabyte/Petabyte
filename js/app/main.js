/**
 * Created by George on 5/29/2015.
 */
$(document).ready(function()
{
    //Navigation Menu Toggle
    $('li a').hover(function(){
        var $menuIcon = $(this).children("i");
        $menuIcon.removeClass("fa-circle-o");
        $menuIcon.addClass("fa-dot-circle-o");
    },function(){
        var $menuIcon = $(this).children("i");

        $menuIcon.removeClass("fa-dot-circle-o");
        $menuIcon.addClass("fa-circle-o");
    });

    $('li a').click(function(e){
        var $menuIcon = $('li a').children("i");
        $menuIcon.removeClass("fa-circle");
        var $currentMenuIcon = $(this).children("i");
        $currentMenuIcon.addClass("fa-circle");
    });

});


