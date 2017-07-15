<?php
include 'dbconfig.php';
 
 
 
if(isset($_POST['importSubmit'])){
    echo "Inside If";
   
    $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
    if(!empty($_FILES['file']['excel1']) && in_array($_FILES['file']['csv'],$csvMimes)){
        if(is_uploaded_file($_FILES['file']['excel1'])){
          echo "inside other thing";
            //open uploaded csv file with read only mode
            $csvFile = fopen($_FILES['file']['excel1'], 'r');
            
            //skip first line
            fgetcsv($csvFile);
            
            //parse data from csv file line by line
            while(($line = fgetcsv($csvFile)) !== FALSE){
                //check whether member already exists in database with same email
                $prev1 = "";//"SELECT sid FROM  students WHERE sname = '".$line[1]."';";
                $prevResult = $conn->qry($prev1);
                if($prevResult->num_rows > 0){
                    //update member data
                    $conn->qry("UPDATE students SET sid = '".$line[1]."', scity= '".$line[2]." ',sstate='".$line[3]."', WHERE sname= '".$line[0]."';");
                }else{
                    //insert member data into 
					echo "Inserting";
                    $conn->qry("INSERT INTO students(sname, sid, scity, sstate) VALUES ('".$line[0]."','".$line[1]."','".$line[2]."','".$line[3]."','".$line[4]."');");
                }
            }
            
            //close opened csv file
            fclose($csvFile);

            $qstring = '?status=succ';
        }else{
            $qstring = '?status=err';
        }
    }else{
        $qstring = '?status=invalid_file';
    }
}


//header("Location: index.php".$qstring);
?>