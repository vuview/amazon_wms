<?php

    $report = requestReport();

    function requestReport(){
        require('../includes/classes.php'); //autoload classes, not needed if composer is being used
        try {
            $obj = new AmazonReportRequest("myStore");

            $obj->setReportType("_GET_FLAT_FILE_OPEN_LISTINGS_DATA_");
            $obj->requestReport();
            var_dump($obj);


        } catch (Exception $ex) {
            echo 'There was a problem with the Amazon library. Error: '.$ex->getMessage();
        }
    }

