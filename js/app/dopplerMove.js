/**
 * Created by George on 6/15/2015.
 */
$(document).ready(function(){
       var $box = $("#box");
        window.doppler.init(function(bandwidth) {
            var threshold = 4;
            if (bandwidth.left > threshold || bandwidth.right > threshold) {
                var scale    = 10;
                var baseSize = 360;
                var diff = bandwidth.left - bandwidth.right;
                var useValue = (baseSize + scale*diff);
                $box.animate( {rotation: useValue},
                    {   duration: 1,
                        step: function(now) {
                            $(this).css({"transform": "rotate("+now+"deg)"});
                        }
                    });

            }
        });
});