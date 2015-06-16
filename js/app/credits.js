/**
 * Created by George on 6/15/2015.
 */
$(document).ready(function()
{
    $.getJSON("./creditsdata.json")
        .done(function(data){
            var credits = $.parseJSON(JSON.stringify(data));
            addToList(credits);
        });

    var addToList = function(data){
        var $credits = $("#credits");
        if(data.length > 0){
            for(var credit=0; credit<data.length; credit++){
                var $item = $("<li></li>");
                var $linkItem = $("<a></a>");
                $linkItem.append(data[credit].url );
                $linkItem.attr("href",data[credit].url);
                $item.append(data[credit].item +" - "+data[credit].license+" - "+data[credit].additionalInfo +" ");
                $item.append("</br>");
                $item.append($linkItem);
                $credits.append($item);
            }
        }
    };
});