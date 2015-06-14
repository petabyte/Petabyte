/**
 * Created by George on 6/14/2015.
 */
$(document).ready(function() {
    if (!window.requestAnimationFrame) {
        window.requestAnimationFrame = (function () {

            return window.webkitRequestAnimationFrame ||
                window.mozRequestAnimationFrame ||
                window.oRequestAnimationFrame ||
                window.msRequestAnimationFrame ||
                function (/* function FrameRequestCallback */ callback, /* DOMElement Element */ element) {

                    window.setTimeout(callback, 1000 / 60);

                };

        })();
    }

    var canvas = document.getElementById('scene');
    var ctx = canvas.getContext('2d');
    var w = canvas.width;
    var h = canvas.height;

    var circle = function (color, r, x) {
        ctx.fillStyle = color;

        ctx.beginPath();
        ctx.arc(x, 0, r, 0, 2 * Math.PI, true);
        ctx.closePath();

        ctx.fill();
    }


    var i = 0;
    var planetFactor = 10;
    var planets=[];
    var colors = ["#CCB447","#156b87", "#876315", "#543510", "#872815"];
    $.ajax({url: './planets.csv',
        success: function(data) {
            planets = $.csv.toObjects(data);
            ctx.fillStyle = '#F7F3E9';
            ctx.fillRect(0, 0, w, h);
            ctx.translate(w / 2, h / 2);
            redraw();
        }
    });

    var redraw = function () {
        ctx.save();
        if(planets.length > 0){
            circle(colors[0], planets[0].radius, planets[0].distance);
            // rotate + move along x
            ctx.rotate(i / 100);
            ctx.translate(100, 0);
            circle(colors[1], planets[1].radius * planetFactor, planets[1].distance * planetFactor);
            circle(colors[2], planets[2].radius * planetFactor, planets[2].distance * planetFactor);
            circle(colors[3], planets[3].radius * planetFactor, planets[3].distance * planetFactor);
            circle(colors[4], planets[4].radius * planetFactor, planets[4].distance * planetFactor);
            circle(colors[1], planets[5].radius * planetFactor, planets[5].distance * planetFactor);
            circle(colors[2], planets[6].radius * planetFactor, planets[6].distance * planetFactor);
            circle(colors[3], planets[7].radius * planetFactor, planets[7].distance * planetFactor);
            circle(colors[4], planets[8].radius * planetFactor, planets[8].distance * planetFactor);
            circle(colors[1], planets[9].radius * planetFactor, planets[9].distance * planetFactor);
        }
        ctx.restore();
        i++;
        window.requestAnimationFrame(redraw);
    };


    window.requestAnimationFrame(redraw);
});