<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>MyFlightTicket</title>
    </head>
    <body>
        <?php
            $data = array(
                "request" => array(
                "passengers" => array( 
                    "adultCount" => "1"
                        ),
                    "slice" => array( 
                            array(
                                "origin" => "ISB",
                                "destination" => "LHE",
                                "date" => "2016-02-08"),
                            
                            ),
                                "solutions" => "1",
                                "saleCountry" => "PK",
                                "refundable" => false
                            ),                   
             );            
            $data_string = json_encode($data);
           
            $ch = curl_init('https://www.googleapis.com/qpxExpress/v1/trips/search?key=AIzaSyBuEV69eeeLsZpShOJCqjGGn3_XWJrZeSc');
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);                                                                      
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));                                                                                                                   
            
            $result = curl_exec($ch);
            curl_close($ch);
          
            foreach ($airport as $result->Airport)
            {
                echo $airport;
            }
            ?>
    </body>
</html>
