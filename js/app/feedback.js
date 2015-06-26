/**
 * Created by George on 6/15/2015.
 */
$(document).ready(function()
{
    $.getJSON("./feedback.json")
        .done(function(data){
            var feedbackData = $.parseJSON(JSON.stringify(data));
            addToList(feedbackData);
            $("#feedback").DataTable();
        });

    var addToList = function(data){
        var $feedback = $("#feedback");
        if(data.length > 0){
            var $tbody = $("<tbody id=\"myTable\"></tbody>");
            for(var feedback=0; feedback<data.length; feedback++){
                var $item = $("<tr></tr>");
                $item.append("<td>"+data[feedback].name +"</td>");
                $item.append("<td>"+data[feedback].email+"</td>");
                $item.append("<td>"+data[feedback].comment +"</td>");
                $tbody.append($item);
            }
            $feedback.append($tbody);
        }
    };

});