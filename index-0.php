<?php
include('../vendor/autoload.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- bootstrap -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
        <!-- datatable -->
        <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.7.1.js"></script>

        <link href="DataTables/datatables.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.datatables.net/2.3.2/css/dataTables.dataTables.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/2.3.2/css/dataTables.bootstrap5.css">
 
        <script src="https://cdn.datatables.net/2.3.2/js/dataTables.js"></script>


        <script>
            $(document).ready(function() {
                $('#example').DataTable({
                    ajax: 'getDataOracleAPI.php',
                    processing: true,
                    serverSide: true,
                });
            } );
        </script>
        
        <title>คดีนัดพิจารณา <?php echo thaidate('วันlที่ j F พ.ศ.Y');?> จำนวน 75 คดี</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12"> <br>
                    <h3>คดีนัดพิจารณา <?php echo thaidate('วันlที่ j F พ.ศ.Y');?> จำนวน 75 คดี</h3>
                    <table id="example" class="display table table-striped  table-hover table-responsive table-bordered ">
                        <thead>
                            <tr>
                                <th width="20%">เลขคดี</th>
                                <th width="40%">โจทก์ / จำเลย</th>
                                <th width="20%">ห้องพิจารณา</th>
                                <th width="20%">เวลา</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th width="20%">เลขคดี</th>
                                <th width="40%">โจทก์ / จำเลย</th>
                                <th width="20%">ห้องพิจารณา</th>
                                <th width="20%">เวลา</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <center>Basic  PHP PDO DataTables by devbanban.com 2021</center>
    </body>
</html>