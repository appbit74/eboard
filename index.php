<?php
include('../vendor/autoload.php');
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google" content="notranslate">
    <title>คดีนัดพิจารณา <?php echo thaidate('วันlที่ j F พ.ศ.Y');?></title>

    <link rel="shortcut icon" href="kiosk.png" type="image/x-icon">
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/2.3.2/css/dataTables.dataTables.css"> -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation.min.css">
     <link rel="stylesheet" href="https://cdn.datatables.net/2.3.2/css/dataTables.foundation.css">
</head>
<body>

<table id="example" class="display">
        <thead>
            <tr>
                <th width="20%">เลขคดี</th>
                <th width="45%">โจทก์ / จำเลย</th>
                <th width="25%">ห้องพิจารณา</th>
                <th width="10%">เวลา</th>
            </tr>
        </thead>
    </table>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/js/foundation.min.js"></script>
    <script src="https://cdn.datatables.net/2.3.2/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.3.2/js/dataTables.foundation.js"></script>
    <script>

        var table = new DataTable('#example', {
            ajax: 'getDataOracleAPI.php',
            ordering: false,
            "pageLength": 9,
            layout: {
                topStart: function () {
                    let toolbar = document.createElement('div');
                    toolbar.innerHTML = '<h4>คดีนัดพิจารณา <?php echo thaidate('j F พ.ศ.Y');?> จำนวน <span class="case"></span> คดี</h4>';
        
                    return toolbar;
                },
                bottomStart: 'info',
                bottomEnd: {
                    paging: {
                        firstLast: false
                    }
                }
            },
            "initComplete": function(settings, json) {
                var api = this.api();
                var numRows = api.rows().count();
                $('.case').html(numRows);
            }
        });
    </script>
</body>
</html>