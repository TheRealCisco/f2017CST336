// JavaScript File
// Document Ready: 
// $(function() {

// })

$(function() {
    $(".loading").hide()

    // Show spinner
    $(".loading").show()

    $.ajax({
            // The URL for the request
            url: "https://earthquake.usgs.gov/fdsnws/event/1/query?format=geojson&starttime=2017-11-12&endtime=2017-11-30&latitude=36.6&longitude=-121.9&maxradius=10&minmag=4",

            // Whether this is a POST or GET request
            type: "GET",

            // The type of data we expect back
            dataType: "json",

            //jsonpCallback: 'callback',
        })
        // Code to run if the request succeeds (is done);
        // The response is passed to the function
        .done(function(data) {
            console.log("Earthquake Data:", data);

            // Do not do anything if there is no data
            if (!data || data.length == 0) return;

            // format the date
            // var asOfDate = new Date(data.standings_date);
            // var asOfDateFormatted = (asOfDate.getMonth() + 1) + '/' + asOfDate.getDate() + '/' + asOfDate.getFullYear();

            // Better way, easier way to format?
            // Try https://github.com/phstc/jquery-dateFormat
            var asOfDateFormatted = $.format.date(data.standings_date, "d-MMM-yy");

            // Insert the date
            $('h1 > span').html(asOfDateFormatted);

            // Print the standings
            for (var i in data.features) {
                var standing = data.standing[i];

                $('#results > tbody')
                    .append($('<tr>')
                        .append($('<td>')
                            .html(standing.conference)
                        )
                        .append($('<td>')
                            .append($('<img>')
                                .attr('src', getLogoFor(standing.last_name))
                                .attr('class', 'team-logo')
                            )
                        )
                        .append($('<td>')
                            .html(standing.first_name + " " + standing.last_name)
                        )
                        .append($('<td>')
                            .html(standing.won)
                        )
                        .append($('<td>')
                            .html(standing.lost)
                        )
                        .append($('<td>')
                            .html(standing.games_back)
                        )
                        .append($('<td>')
                            .html(standing.last_ten)
                        )
                        .append($('<td>')
                            .html(standing.streak)
                        )
                    );
            }
        })
        // Code to run if the request fails; the raw request and
        // status codes are passed to the function
        .fail(function(xhr, status, errorThrown) {
            console.log("Sorry, there was a problem!");
            console.log("Error: " + errorThrown);
            console.log("Status: " + status);
            console.dir(xhr);
        })
        // Code to run regardless of success or failure;
        .always(function(xhr, status) {
            console.log("The request is complete!");
            $(".loading").hide()
        });
})
