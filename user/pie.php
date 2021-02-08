<?php


//database connection
$server = "localhost";
$username = "root";
$pass = "";
$dbname = "onlinetest";
// Create connection
$con = mysqli_connect($server, $username, $pass, $dbname);



$query = "SELECT `Examinee Name`,`correct answer`,`wrong answer` FROM `tbl_score`"; //update your query as needed

$results = mysqli_query($con, $query);
$pieData = array();

while ($row = mysqli_fetch_array($results)) {
    $acc_type = $row['Examinee Name'];
    $acc_type = $row['correct answer'];
    $acc_num = $row['wrong answer'];
    $pieData[] = array($row['correct answer'], $row['wrong answer']);
}
?>


<div class="hellcontainer">
    <div id="chart_div"></div>
</div>

<script type="text/javascript" src="https://www.google.com/jsapi"></script>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

<script type="text/javascript">
    google.load("visualization", "1", {
        packages: ["corechart"]
    });
    google.setOnLoadCallback(drawChart);

    function drawChart() {

        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Examinee Name');
        data.addColumn('number', 'correct answer');
        data.addColumn('number', 'wrong answer');
        data.addRows(<?php echo json_encode($pieData, JSON_NUMERIC_CHECK); ?>);

        var options = {
            'title': 'Language spoken',
            'width': 400,
            'height': 300
        };

        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);

    }
</script>