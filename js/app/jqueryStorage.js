/**
 * Created by George on 6/25/2015.
 */
$(document).ready(function(){
    var $listElements = $("li[data-id]");
    var onClickFunction = function(event){
        var $target = $(event.currentTarget);
        $target.addClass("strikeout");
    };
    $listElements.on("click",onClickFunction);

    var $removeButton = $("#removeBtn");
    $removeButton.on("click", function(){
        var $doneElements = $(".strikeout");
        var idArray=[];
        $.each($doneElements, function(i, val){
            var todo_id = $(val).data("id");
            idArray.push(todo_id);

        });
        $.post("delete.php",{"todo_id":idArray.join(",")})
            .done(function(){
                var $doneElements = $(".strikeout");
                $doneElements.remove();
            });
    });
    var $addButton = $("#addBtn");
    var $todoValue = $("#todo");
    var addItemFunction = function(){
        $.post("insert.php",{"todo":$todoValue.val()})
            .done(function(){
                var $todoList = $("#todolist");
                var $todoNew = $("<li></li>");
                $todoNew.append($todoValue.val());
                $todoNew.on("click", onClickFunction);
                $todoList.append($todoNew);
                $todoValue.val("");
            });
    };
    $addButton.on("click", addItemFunction);
    $todoValue.on("keypress",function(event){
        var key = event.which;
        if(key === 13){
            addItemFunction();
        }
    });

});