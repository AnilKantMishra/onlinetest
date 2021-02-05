<!DOCTYPE html>
<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <style>
        body {
            background-color: #f1f1f1;
        }

        h1 {
            text-align: center;
            font-size: 18px;

        }

        .container {
            height: 200px;
            position: relative;
            /* border: 3px solid green; */
        }

        .center {
            margin: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }
    </style>
</head>

<body>
    <?php include 'userheader.php'; ?>

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Your Score Card</h4>
                </div>
                <div class="modal-body">
                    <?php
                    include '../database/useroops.php';
                    $obj = new user();
                    // echo "<pre>";
                    // print_r($obj->seeanswerhere());
                    foreach ($obj->seeanswerhere() as $key => $value) {
                        echo "<h1>" . $key . "<br>" . "<br>" . $value . "<br>";
                    }

                    ?>

                </div>
                <div class="modal-footer">
                    <button type='button' class='btn-lg btn-success' s>
                        <a href='index.php' style='color:white;'> Retake Test </a></button>
                </div>
            </div>

        </div>
    </div>


    <?php include '../footer.php'; ?>
</body>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#myModal').modal('show');
    });
</script>

</html>