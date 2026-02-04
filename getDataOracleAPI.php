<?php
// create a new cURL resource

$curl = curl_init();

    $data_login = array(
        'token'=> '3ccb9ac467ae7111449c0cdf30cff0c3198fa55a',
    );
    
    curl_setopt_array($curl, array(
      CURLOPT_URL => 'http://crims.web/crimsExternalApi/API/TV/getAppointKios',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
      CURLOPT_SSL_VERIFYPEER => 0,
      CURLOPT_HTTPHEADER => array(
        'Content-Type: application/x-www-form-urlencoded'
      ),
    ));
    $response = curl_exec($curl);

    curl_close($curl);
    if(isset($response)){
        $result_formated = array();
        $APIdata = json_decode($response, true);
        // echo $response;    
        // echo $APIdata['app_data'][0]['accu_desc'];
        foreach($APIdata as $key => $array){
            // echo $key."=>".$value."<br>";
            if ($key == 'app_data') {
                foreach($array as $data){
                    /* // echo $data['accu_desc']."<br>";
                    
                    $tmp['id'] 				= $data['run_id'];
                    // yyyy-mm-dd hh:mm:ss
                    $tmp['create_time'] 	= '';
                    // กำหนด field ที่ใช้ เปรียบเทียบเวลา hh:mm or hh.mm
                    $tmp['compare_time'] 	= $data['time_appoint'];
                    // ชื่อห้องสำหรับกรอกการแสดงผล
                    $tmp['room'] 			= $data['room_id'];
            
                    // datatable
                    $tmp['field_1'] 		= $data['case_no'];
                    $tmp['field_2'] 		= $data['pros_desc'];
                    $tmp['field_3'] 		= $data['accu_desc'];
                    $tmp['field_4'] 		= $data['time_appoint'];
                    $tmp['field_5'] 		= $data['room_id'];
                    $tmp['field_6'] 		= $data['app_name'];
                    $tmp['field_7'] 		= $data['status_name'];
                    $tmp['field_8'] 		= ''; 
                    
                    "draw": 1,
                    "recordsTotal": 57,
                    "recordsFiltered": 57,
                    "data"
                    */
                    $tmp['data'][]= array(
                        $data['case_no'],
                        '<span style="color: blue">'.$data['pros_desc'].'</span><br><span style="color: red">'.$data['accu_desc'].'</span>',
                        $data['room_id'],
                        $data['time_appoint']
                    );
            
                    // array_push($result_formated, $tmp);
                }
            }
        }
        echo json_encode($tmp);
    } 