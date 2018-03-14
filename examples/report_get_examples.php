<?php

    $report = getAmazonReport();

    function getAmazonReport(){
        require('../includes/classes.php'); //autoload classes, not needed if composer is being used
        try {
            $reportId = "8718105686017604";
            $obj = new AmazonReport("myStore");
            $obj->setReportId($reportId);
            $obj->fetchReport();
            $obj->saveReport("report_".$reportId.".csv");
            //echo $obj->getRawReport();




        } catch (Exception $ex) {
            echo 'There was a problem with the Amazon library. Error: '.$ex->getMessage();
        }
    }

