<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <script
src="https://code.jquery.com/jquery-3.5.1.js"
integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
crossorigin="anonymous"></script> -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.23/datatables.min.css" />
    <link rel="stylesheet" href="admindash.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f1f1f1;
        }

        #table {
            font-size: 11px;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <?php include_once 'adminheader.php';

    ?>

    <div class="container-fluid">
        <table id="table" width="100%" class="table table-bordered display responsive;">
            <thead style="    background-image: linear-gradient(rgba(4, 168, 255, 0.3), rgba(197, 31, 95, 0.3));">
                <tr style="font-size: 20px;">
                    <th>
                        Quiz Name
                    </th>
                    <th>
                        Name
                    </th>
                    <th>
                        Total Question
                    </th>
                    <th>
                        wrong answer
                    </th>
                    <th>
                        correct answer
                    </th>
                    <th>
                        Date
                    </th>


                </tr>
            </thead>
            <tbody>
                <?php
                include_once  '../database/adminoops.php'; ?>
                <?php
                $seeanswer = new admin();

                $res = $seeanswer->seeuseranswer();
                while ($s = mysqli_fetch_array($res)) {
                ?>
                    <tr>
                        <td style="font-size: 13px;">
                            <?php echo $s['Quiz Name']; ?></td>

                        <td style="font-size: 13px;">
                            <?php echo $s['Examinee Name']; ?></td>
                        <td style="font-size: 13px;">
                            <?php echo $s['Total Question']; ?></td>
                        <td style="font-size: 13px;">

                            <?php echo $s['wrong answer']; ?></td>
                        <td style="font-size: 13px;">
                            <?php echo $s['correct answer']; ?></td>
                        <td style="font-size: 13px;">
                            <?php echo $s['Exam Date']; ?></td>


                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#table').dataTable({
                "scrollX": true,
                "lengthMenu": [
                    [10, 30, 50, 100, -1],
                    [10, 30, 50, 100, "All"]
                ]
            });
        });
    </script>
    <?php include '../footer.php'; ?>
</body>

</html>