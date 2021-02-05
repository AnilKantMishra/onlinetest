<?php 
session_start();
// $res['name'] = $_SESSION['username'];
// $res['user_id'] = $_SESSION['userid'];
//     $res =  $res['user_id'];
?>
<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- <script
src="https://code.jquery.com/jquery-3.5.1.js"
integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
crossorigin="anonymous"></script> -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.23/datatables.min.css"/>
        <link rel="stylesheet" href="admindash.css">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <style>
            body{
                background-color: #f1f1f1;
            }
            #table{
                font-size: 11px;
                margin-bottom: 10px;
            }
        </style>
    </head>
    <body >
        <?php include_once 'adminheader.php';?>
        <!-- <h1 style="color:white ;font-size:20px;">  Hello  
<?php echo $name;?></h1> -->
    </nav>
    <div class="container-fluid">
        <table id="table" width="100%" class="table table-bordered display responsive;">
            <thead style="    background-image: linear-gradient(rgba(4, 168, 255, 0.3), rgba(197, 31, 95, 0.3));
">
    <tr style="font-size: 20px;">
        <th>
            Category
        </th>
        <th>
            Question
        </th>
        <th>
            Answer
        </th>
        <th>
            Option1 
        </th>
        <th>
            Option2
        </th>
        <th>
            Option3
        </th>
        <th>
            Option4
        </th>
    </tr>
            </thead>
            <tbody>
                <?php
include_once  '../database/adminoops.php';?>
                <?php
$addcat = new admin();
$res = $addcat->seequestion();
while($s=mysqli_fetch_array($res)){
                ?>
                <tr>
                    <th style="font-size: 13px;">
                        <?php echo $s['cat_name'];?></th>
                    <th style="font-size: 13px;">
                        <?php echo $s['question'];?></th>
                    <th style="font-size: 13px;">
                        <?php echo $s['answer'];?></th>
                    <th style="font-size: 13px;">
                        <?php echo $s['Option1'];?></th>
                    <th style="font-size: 13px;">
                        <?php echo $s['Option2'];?></th>
                    <th style="font-size: 13px;">
                        <?php echo $s['Option3'];?></th>
                    <th style="font-size: 13px;">
                        <?php echo $s['Option4'];?></th>
                </tr>
                <?php
}
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src= "https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#table').dataTable(
                {
                    "scrollX": true,
                    "lengthMenu": [[10,30, 50,100, -1], [10, 30, 50, 100, "All"]]}
            );
        }
                         );
    </script>
    <?php include '../footer.php';?>
</body>
</html>
