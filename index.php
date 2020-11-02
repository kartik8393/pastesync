<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paste Sync</title>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<?php
        include "db_connection.php";
        if(isset($_POST['save'])){
            $code=rand(10000,99999);
            $message=$_POST['data'];
            echo "inside submit";
            echo $code;
            echo $message;
            $sql = "INSERT into data (code,message) values('$code','$message')";
            $result = $conn->query($sql);
            echo "
            <script>    
                window.alert(".$code.")


            </script>
            ";
            // echo "
            // <script>
            //     var str=".$message."
            //     var code2=".$code."
            //     console.log('str,code2')
            //     $.ajax({
            //     url:'savedata.php',
            //     type:'post',
            //     data:{id:str,code:code2},
            //     success:function(feedback){
            //         console.log(feedback);
            //         var obj = JSON.parse(feedback);
            //         console.log(obj);
            //         $('#code1').val(code2);
            //     }

            // });
            
            // </script>";
        }
?>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Save Data</h3>
                <form method="POST">
                    <label for="">Paste your data</label><br>
                    <textarea name="data" id="data" cols="30" rows="10"></textarea><br><br>
                    <label for="">Your Unique Code</label><br>
                    <input id="code1" type="text" readonly><br><br>
                    <button type="submit" name="save">Save</button>
                </form>
            
            </div>
            <div class="col-md-6">
            
            
            
            </div>
        
        </div>
    
    
    </div>
    <script>
        if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
    </script>
</body>
</html>