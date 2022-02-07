<style>
    @media only screen and (max-width: 760px),
    (min-device-width: 802px) and (max-device-width: 1020px) {

        table,
        thead,
        tbody,
        th,
        td,
        tr {
            display: block;

        }

        .empty {
            display: none;
        }

        th {
            position: absolute;
            top: -9999px;
            left: -9999px;
        }

        tr {
            border: 1px solid #ccc;
        }

        td {
            border: none;
            border-bottom: 1px solid #eee;
            position: relative;
            padding-left: 50%;
        }
        td:nth-of-type(1):before {
            content: "Dimanche";
        }

        td:nth-of-type(2):before {
            content: "Lundi";
        }

        td:nth-of-type(3):before {
            content: "Mardi";
        }

        td:nth-of-type(4):before {
            content: "Mercredi";
        }

        td:nth-of-type(5):before {
            content: "Jeudi";
        }

        td:nth-of-type(6):before {
            content: "Vendredi";
        }

        td:nth-of-type(7):before {
            content: "Samedi";
        }


    }

    @media only screen and (min-device-width: 320px) and (max-device-width: 480px) {
        body {
            padding: 0;
            margin: 0;
        }
    }

    @media only screen and (min-device-width: 802px) and (max-device-width: 1020px) {
        body {
            width: 495px;
        }
    }

    @media (min-width:641px) {
        table {
            table-layout: fixed;
        }

        td {
            width: 33%;
        }
    }

    .row {
        margin-top: 20px;
    }

    .today {
        background: yellow;
    }
</style>
<?php
setlocale(LC_TIME, "fr_FR");
function build_calendar($month, $year)
{
    $daysOfWeek = array('Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi');
    $firstDayOfMonth = mktime(0, 0, 0, $month, 1, $year);
    $numberDays = date('t', $firstDayOfMonth);
    $dateComponents = getdate($firstDayOfMonth);
    $monthName = $dateComponents['month'];
    $dayOfWeek = $dateComponents['wday'];
    $datetoday = date('Y-m-d');
    $calendar = "<table class='table table-bordered'>";
    $calendar .= "<center><h2>$monthName $year</h2>";
    $calendar .= "<a class='btn btn-xs btn-primary' href='?month=" . date('m', mktime(0, 0, 0, $month - 1, 1, $year)) . "&year=" . date('Y', mktime(0, 0, 0, $month - 1, 1, $year)) . "'>Mois précédent</a> ";
    $calendar .= " <a href='rdv.php' class='btn btn-xs btn-primary' data-month='" . date('m') . "' data-year='" . date('Y') . "'>Mois actuel</a> ";
    $calendar .= "<a href='?month=" . date('m', mktime(0, 0, 0, $month + 1, 1, $year)) . "&year=" . date('Y', mktime(0, 0, 0, $month + 1, 1, $year)) . "' class='btn btn-xs btn-primary'>Mois suivant</a></center><br>";

    $calendar .= "<tr>";

    foreach ($daysOfWeek as $day) {
        $calendar .= "<th class='header'>$day</th>";
    }
    $currentDay = 1;
    $calendar .= "</tr><tr>";
    if ($dayOfWeek > 0) {
        for ($k = 0; $k < $dayOfWeek; $k++) {
            $calendar .= "<td class='empty'></td>";
        }
    }
    $month = str_pad($month, 2, "0", STR_PAD_LEFT);
    while ($currentDay <= $numberDays) {
        if ($dayOfWeek == 7) {
            $dayOfWeek = 0;
            $calendar .= "</tr><tr>";
        }
        $currentDayRel = str_pad($currentDay, 2, "0", STR_PAD_LEFT);
        $date = "$year-$month-$currentDayRel";
        $dayname = strtolower(date('l', strtotime($date)));
        $eventNum = 0;
        $today = $date == date('Y-m-d') ? "today" : "";
        $calendar .= "<td><h4>$currentDay</h4>";
        $calendar .= "</td>";
        $currentDay++;
        $dayOfWeek++;
    }
    if ($dayOfWeek != 7) {
        $remainingDays = 7 - $dayOfWeek;
        for ($l = 0; $l < $remainingDays; $l++) {
            $calendar .= "<td class='empty'></td>";
        }
    }

    $calendar .= "</tr>";
    $calendar .= "</table>";
    return $calendar;
}
?>
<div class="row">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div id="calendar">
                    <?php
                    if (isset($_GET['month'])) {
                        echo build_calendar($_GET['month'], $_GET['year']);
                    } else {
                        $dateComponents = getdate();
                        $month = $dateComponents['mon'];
                        $year = $dateComponents['year'];
                        echo build_calendar($month, $year);
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>