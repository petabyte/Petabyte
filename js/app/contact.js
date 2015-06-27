/**
 * Created by George on 6/26/2015.
 */
$(document).ready(function(){
    var isValid = null;
    var $submitButton = $("button");
    var $form = $("form");
    var submitForm = function(e){
        e. preventDefault();
        if(isValid === false){
            isValid = null;
            return false;
        }
        $submitButton.trigger("click");
    };
    $form.submit(submitForm);
    $submitButton.on("click", function(event){
        isValid = $form[0].checkValidity();
        if(false ===  isValid){
            return true;
        }
        event.preventDefault();
        var $name = $("#name");
        var $email = $("#email");
        var $comment = $("#comment");
        var $alert = $("#feedbackAlert");
        var feedback = {};
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
