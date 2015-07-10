/**
 * Created by George on 6/15/2015.
 */
$(document).ready(function(){
    var $currentCategory = $("#inputCategory");

    function getRandomGif(category) {
        var $button = $("#updateCategory");
        $button.addClass("btn-success");
        $button.find(".fa").addClass("fa-spinner fa-spin");
        var $imgSpace = $("#giphyGif");
        var $gifId = $("#gifId");
        var $gifUrl = $("#gifUrl");
        $.ajax({url: "http://api.giphy.com/v1/gifs/random?api_key=dc6zaTOxFJmzC&tag="+category}).
            done( function(data) {
            var imageUrl = data.data.image_url;
            $imgSpace.attr("src",imageUrl);
                $gifId.empty();
                $gifId.html("id: " + data.data.id);
                $gifUrl.empty();
                $gifUrl.html("url: "+ imageUrl);
        }).always(function(){
                $button.removeClass("btn-success");
                $button.find(".fa").removeClass("fa-spinner fa-spin");
            });
    }
    $("#updateCategory").on("click",function () {
        getRandomGif($currentCategory.val());
    });

    $currentCategory.keypress(function(event){
        if ( event.which === 13 ) {
            getRandomGif($currentCategory.val());
        }
    });
    getRandomGif($currentCategory.val());
    setInterval(function(){getRandomGif($currentCategory.val());}, 20000);
});