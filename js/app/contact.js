/**
 * Created by George on 6/26/2015.
 */
$(document).ready(function(){
    var $submitButton = $("button");
    $submitButton.on("click", function(event){
        event.preventDefault();
        var $name = $("#name");
        var $email = $("#email");
        var $comment = $("#comment");
        var $alert = $("#feedbackAlert");
        var feedback = new Object();
        feedback.name = $name.val();
        feedback.email = $email.val();
        feedback.comment = $comment.val();
        $.post("feedback_json.php",{"json" : JSON.stringify(feedback)})
            .done(function(){
                $name.val("");
                $email.val("");
                $comment.val("");
                $alert.removeClass("collapse");
                $alert.addClass("fade in");
            });

    });
});
