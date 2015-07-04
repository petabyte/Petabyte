/**
 * Created by George on 5/29/2015.
 */
$(document).ready(function()
{
    var lastLocation = localStorage.getItem("lastLocation");
    var $navigation = $(".nav.navbar-nav");
    var $sideMenu = $("#sidemenu");
    var $breadcrumb = $(".breadcrumb");
    var $indexPage = $(".caption");
    var $linkNavigation = $navigation.find("li a");
    var $linkBreadCrumb = $breadcrumb.first();
    var $linkSideMenu = $sideMenu.find("a");
    var $indexPageNavigation = $indexPage.find("h4 a");

    var setLastLocationTopNav = function(element){
        var $currentMenuIcon = element.children("i");
        $currentMenuIcon.addClass("fa-circle");
    };

    var setLastLocationSideMenu = function(element){
        element.addClass("active");
    };

    var setLocationNav = function(location){
        var currentFileName = null;
        var parentFileName = null;
        var currentFileNameHref = $(location).attr("href");
        var parentFileNameHref = $linkBreadCrumb.find("[href]").attr("href");
        if(currentFileNameHref){
            currentFileName = currentFileNameHref.split("/").pop();
            if(currentFileName === ""){
                currentFileName = "index.html";
            }
        }
        if(parentFileNameHref){
            parentFileName = parentFileNameHref.split("/").pop();
        }
        var $currentTopNav = $linkNavigation.filter("[href=\""+currentFileName+"\"]");
        var $currentSideMenu = $linkSideMenu.filter("[href=\""+currentFileName+"\"]");
        var $parentTopNav = $linkNavigation.filter("[href=\""+parentFileName+"\"]");
        var $parentSideMenu = $linkSideMenu.filter("[href=\""+parentFileName+"\"]");
        if($currentTopNav.length > 0 && $currentSideMenu.length > 0){
            setLastLocationTopNav($currentTopNav);
            setLastLocationSideMenu($currentSideMenu);
        }else{
            setLastLocationTopNav($parentTopNav);
            setLastLocationSideMenu($parentSideMenu);
        }
    };

    var $currentLocation =$("<a>",{href:$(location).attr("href")})[0];
    var $breadCrumbParentLocation = $linkBreadCrumb.find("[href=\""+lastLocation+"\"]");
    if (lastLocation){
        if($currentLocation.pathname.indexOf(lastLocation) !== -1 || $breadCrumbParentLocation.length !== 0){
            var $currentTopNav = $linkNavigation.filter("[href=\""+lastLocation+"\"]");
            var $currentSideMenu = $linkSideMenu.filter("[href=\""+lastLocation+"\"]");
            setLastLocationTopNav($currentTopNav);
            setLastLocationSideMenu($currentSideMenu);
        }else{
            setLocationNav($currentLocation, $breadCrumbParentLocation);
        }
    }else{
        setLocationNav($currentLocation, $breadCrumbParentLocation);
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



