/**
 * Created by George on 6/13/2015.
 */
$(document).ready(function(){
    var color = d3.scale.quantize()
        .range(["#156b87", "#876315", "#543510", "#872815","#CCB447"]);

    var size = 960;

    var pack = d3.layout.pack()
        .sort(null)
        .size([size, size])
        .value(function(d) { return d.radius * d.radius; })
        .padding(5);

    var svg = d3.select("#planets").append("svg")
        .attr("width", size)
        .attr("height", size);

    var type = function type(d) {
        d.radius = +d.radius;
        d.distance = d.distance ? +d.distance : Infinity;
        return d;
    }


    d3.csv("planets.csv", type, function(error, exoplanets) {
        exoplanets.sort(function(a, b) {
            return isFinite(a.distance) || isFinite(b.distance)
                ? a.distance - b.distance
                : 0;
        });

        color.domain(d3.extent(exoplanets, function(d) { return d.radius; }));

        svg.selectAll("circle")
            .data(pack.nodes({children: exoplanets}).slice(1))
            .enter().append("circle")
            .attr("r", function(d) { return d.r; })
            .attr("cx", function(d) { return d.x; })
            .attr("cy", function(d) { return d.y; })
            .style("fill", function(d) { return color(d.radius)});

        $('svg circle').tipsy({
            gravity: 'w',
            html: true,
            title: function() {
                var d = this.__data__;
                return d.name
                + "\nplanet radius: " + d.radius + " EU";
            }
        });
    });

    d3.select(self.frameElement).style("height", size + "px");
});


