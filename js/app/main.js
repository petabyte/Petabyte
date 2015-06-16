/**
 * Created by George on 5/29/2015.
 */
$(document).ready(function()
{
    var lastLocation = localStorage.getItem("lastLocation");
    var $navigation = $(".nav.navbar-nav");
    var $sideMenu = $("#sidemenu");
    var $indexPage = $(".caption");
    var $linkNavigation = $navigation.find("li a");
    var $linkSideMenu = $sideMenu.find("a");
    var $indexPageNavigation = $indexPage.find("h4 a");

    var setLastLocationTopNav = function(element){
        var $currentMenuIcon = element.children("i");
        $currentMenuIcon.addClass("fa-circle");
    };

    var setLastLocationSideMenu = function(element){
        element.addClass("active");
    };

    if (lastLocation){
        var $currentTopNav = $linkNavigation.filter("[href=\""+lastLocation+"\"]");
        var $currentSideMenu = $linkSideMenu.filter("[href=\""+lastLocation+"\"]");
        setLastLocationTopNav($currentTopNav);
        setLastLocationSideMenu($currentSideMenu);
    }


    //Navigation Menu Toggle
    $navigation.hover(function(){
        var $menuIcon = $(this).children("i");
        $menuIcon.removeClass("fa-circle-o");
        $menuIcon.addClass("fa-dot-circle-o");
    },function(){
        var $menuIcon = $(this).children("i");
        $menuIcon.removeClass("fa-dot-circle-o");
        $menuIcon.addClass("fa-circle-o");
    });

    $linkSideMenu.click(function (){
        $(this).removeClass("active");
        setLastLocationSideMenu($(this));
        localStorage.setItem("lastLocation",$(this).attr("href"));

    });

    $linkNavigation.click(function(){
        var $menuIcon = $(this).children("i");
        $menuIcon.removeClass("fa-circle");
        setLastLocationTopNav($(this));
        localStorage.setItem("lastLocation",$(this).attr("href"));
    });

    $indexPageNavigation.click(function(){
        localStorage.setItem("lastLocation",$(this).attr("href"));
    });

});



