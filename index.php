<html>
<body>
<?php
//load the database configuration file
include 'dbconfig.php';

if(!empty($_GET['status'])){
    switch($_GET['status']){
        case 'succ':
            $statusMsgClass = 'alert-success';
            $statusMsg = 'Members data has been inserted successfully.';
            break;
        case 'err':
            $statusMsgClass = 'alert-danger';
            $statusMsg = 'Some problem occurred, please try again.';
            break;
        case 'invalid_file':
            $statusMsgClass = 'alert-danger';
            $statusMsg = 'Please upload a valid CSV file.';
            break;
        default:
            $statusMsgClass = '';
            $statusMsg = '';
    }
}
?>
<div class="container">
    <?php if(!empty($statusMsg)){
        echo '<div class="alert '.$statusMsgClass.'">'.$statusMsg.'</div>';
    } ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            Members list
            <a href="javascript:void(0);" onclick="$('#importFrm').slideToggle();">Import Members</a>
        </div>
        <div class="panel-body">
            <form action="test.php" method="post" enctype="multipart/form-data" id="importFrm">
                <input type="file" name="file" />
                <input type="submit" class="btn btn-primary" name="importSubmit" value="IMPORT">
            </form>
            <table class="table table-bordered">
                <thead>
                    <tr>
                      <th>Name</th>
                      <th>id</th>
                      <th>city</th>
                      <th>state</th>
                      
                    </tr>
                </thead>
                <tbody>
                <?php
                    //get records from database
                    $qry = $conn->query("SELECT * FROM students ORDER BY id DESC");
                    if($qry->num_rows > 0){ 
                        while($row = $qry->fetch_assoc()){ ?>
                    <tr>
                      <td><?php echo $row['name']; ?></td>
                      <td><?php echo $row['id']; ?></td>
                      <td><?php echo $row['city']; ?></td>
                     
                      <td><?php echo ($row['state'] == '1')?'Active':'Inactive'; ?></td>
                    </tr>
                    <?php } }
					else{ ?>
                    <tr><td colspan="4">No member(s) found.....</td></tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>