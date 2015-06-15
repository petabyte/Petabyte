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

    var circle = function (color, r, x, name) {
        ctx.fillStyle = color;

        ctx.beginPath();
        ctx.arc(x, 0, r, 0, 2 * Math.PI, true);
        ctx.closePath();
        ctx.font="20px Verdana";
        ctx.fillText(name,x+r,0);

        ctx.fill();
    }
    var i = [0, 0, 0, 0, 0, 0, 0, 0, 0];
    var planetFactor = 8;
    var planets=[];
    var colors = ["#CCB447","#156b87", "#876315", "#543510", "#872815"];
    $.ajax({url: './planets.csv',
        success: function(data) {
            planets = $.csv.toObjects(data);

            redraw();
        }
    });

    var redraw = function () {
        ctx.save();
        ctx.fillStyle='#F7F3E9';
        ctx.fillRect(0, 0, w, h);
        if(planets.length > 0){
            ctx.translate(w / 2, h / 2);
            circle(colors[0], planets[0].radius - 90, planets[0].distance,  planets[0].name);
            // rotate + move along x
            ctx.rotate(i[0] / 1000);
            circle(colors[1], planets[1].radius * planetFactor ,30,planets[1].name );
            ctx.rotate(i[1] / 1000);
            circle(colors[2], planets[2].radius * planetFactor , 50, planets[2].name);
            ctx.rotate(i[2] / 1000);
            circle(colors[3], planets[3].radius * planetFactor , 70, planets[3].name);
            ctx.rotate(i[3] / 1000);
            circle(colors[4], planets[4].radius * planetFactor , 90, planets[4].name);
            ctx.rotate(i[4] / 1000);
            circle(colors[1], planets[5].radius  * planetFactor, 200, planets[5].name);
            ctx.rotate(i[5] / 1000);
            circle(colors[2], planets[6].radius * planetFactor , 365, planets[6].name);
            ctx.rotate(i[6] / 1000);
            circle(colors[3], planets[7].radius * planetFactor , 475, planets[7].name);
            ctx.rotate(i[7] / 1000);
            circle(colors[4], planets[8].radius * planetFactor , 545, planets[8].name);
            ctx.rotate(i[8] / 1000);
            circle(colors[1], planets[9].radius  * planetFactor, 600, planets[9].name);
            ctx.translate(1000, 0);
        }
        i[0]++;
        i[1]++;
        i[2]++;
        i[3]++;
        i[4]++;
        i[5]++;
        i[6]++;
        i[7]++;
        i[8]++;
        ctx.restore();
        window.requestAnimationFrame(redraw);
    };
    window.requestAnimationFrame(redraw);
});