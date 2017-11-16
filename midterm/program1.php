<html>
    <head>
        <title> Winter Vacation Planner</title>

        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <style>
        	@import url("css/styles.css");
        </style>
    </head>
    <body>

        <div class="jumbotron">
            <h1> Winter Vacation Planner </h1>
        </div>
        <div id="wrapper">
            <form method="get">
                Select Month:&nbsp;
                <select name="month">
                <option>November</option>
                <option>December</option>
                <option>January</option>
                <option>February</option>
                </select>
                <a href="#" data-toggle="tooltip" title="There are 4 months listed, from November to February. No month selected by default.">
                    <img src="info.png" width="15"></a>
                    <br><br>
                    Number of locations:&nbsp;
                    <input type="radio" name="locationsNumber" value="3" id="l3">
                    <label for="l3">Three</label>&nbsp;
                    <input type="radio" name="locationsNumber" value="4" id="l4">
                    <label for="l4">Four</label>&nbsp;
                    <input type="radio" name="locationsNumber" value="5" id="l5">
                    <label for="l5">Five</label>
                    <a href="#" data-toggle="tooltip" title="No number selected by default.">
                        <img src="info.png" width="15">
                    </a>
                    <br><br>
                    Select Country:&nbsp;
                    <select name="country">
                        <option>USA</option>
                        <option>Mexico</option>
                        <option>Norway</option>
                        </select>
                    <a href="#" data-toggle="tooltip" title="USA is selected by default.">
                        <img src="info.png" width="15">
                    </a>
                    <br><br>Visit locations in alphabetical order:&nbsp;
                    <input type="radio" name="order" value="asc" id="order_asc">
                    <label for="order_asc">A-Z</label>&nbsp;
                    <input type="radio" name="order" value="desc" id="order_desc">
                    <label for="order_desc">Z-A</label>&nbsp;
                    <a href="#" data-toggle="tooltip" title="Users can leave it blank. If checked, the random locations should be ordered alphabetically">
                        <img src="info.png" width="15"></a>
                    <br><br>
                    <input type="submit" value="Create Itinerary">
                    <a href="#" data-toggle="tooltip" title="Errors displayed if no month and number of locations submitted.">
                        <img src="info.png" width="15"></a>
            </form>
        </div>
        <script src="js/jquery.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>

<?php

$month= $_GET['month']. "<br />";
$country= $_GET['country']. "<br />";
$number=  $_GET["locationsNumber"];
$randomNumber=rand(1,28);
echo $month;
echo $country;
echo $number."<br />";

if($_GET['month']=="November"){
  $monthNumber=11;
}
else if($_GET['month']=="December"){
  $monthNumber=12;
}
else if($_GET['month']=="January"){
  $monthNumber=1;
}
else{
  $monthNumber=2;
}
echo $monthNumber;
$events = [
  '2017-'.$monthNumber.$randomNumber => [
    'href' => "img/.$country/"
  ],
];

echo build_html_calendar(2017, $monthNumber, $events);
function build_html_calendar($year, $month, $events = null) {

  $css_cal = 'calendar';
  $css_cal_row = 'calendar-row';
  $css_cal_day_head = 'calendar-day-head';
  $css_cal_day = 'calendar-day';
  $css_cal_day_number = 'day-number';
  $css_cal_day_blank = 'calendar-day-np';
  $css_cal_day_event = 'calendar-day-event';
  $css_cal_event = 'calendar-event';

  $headings = ['M', 'T', 'W', 'T', 'F', 'S', 'S'];

  $calendar =
    "<table cellpadding='0' cellspacing='0' class='{$css_cal}'>" .
    "<tr class='{$css_cal_row}'>" .
    "<td class='{$css_cal_day_head}'>" .
    implode("</td><td class='{$css_cal_day_head}'>", $headings) .
    "</td>" .
    "</tr>";

  $running_day = date('N', mktime(0, 0, 0, $month, 1, $year));
  $days_in_month = date('t', mktime(0, 0, 0, $month, 1, $year));

  $calendar .= "<tr class='{$css_cal_row}'>";

  for ($x = 1; $x < $running_day; $x++) {
    $calendar .= "<td class='{$css_cal_day_blank}'> </td>";
  }

  for ($day = 1; $day <= $days_in_month; $day++) {

   $cur_date = date('Y-'.$monthNumber.$randomNumber, mktime(0, 0, 0, $month, $day, $year));
    $draw_event = false;
    if (isset($events) && isset($events[$cur_date])) {
      $draw_event = true;
    }
    $calendar .= $draw_event ?
      "<td class='{$css_cal_day} {$css_cal_day_event}'>" :
      "<td class='{$css_cal_day}'>";

    $calendar .= "<div class='{$css_cal_day_number}'>" . $day . "</div>";

    if ($draw_event) {
      $calendar .=
        "<div class='{$css_cal_event}'>" .
        "<a href='{$events[$cur_date]['href']}'>" .
        $events[$cur_date]['text'] .
        "</a>" .
        "</div>";
    }
    $calendar .= "</td>";

    if ($running_day == 7) {
      $calendar .= "</tr>";
      if (($day + 1) <= $days_in_month) {
        $calendar .= "<tr class='{$css_cal_row}'>";
      }
      $running_day = 1;
    }
    else {
      $running_day++;
    }
  } 
  if ($running_day != 1) {
    for ($x = $running_day; $x <= 7; $x++) {
      $calendar .= "<td class='{$css_cal_day_blank}'> </td>";
    }
  }

  $calendar .= "</tr>";
  $calendar .= '</table>';
  return $calendar;
}
?>