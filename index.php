<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paste Sync</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
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
                    <button class="btn btn-success"  type="submit" name="save">Save</button>
                </form>
            
            </div>
            <div class="col-md-6">
                <h3>Get Data</h3>
                <form method="POST">
                    <label for="">Your Unique Code</label><br>
                    <input id="code5" type="text"><br><br>
                    <label for="">Get your data</label><br>
                    <textarea name="data" id="data5" cols="30" rows="10" readonly></textarea><br><br>
                    <div class="btn btn-success" name="get" onclick="get_data()">Get Data</button>
                </form>
            
            
            </div>
        
        </div>
    
    
    </div>
    <script>

        function get_data(){
        var str=$('#code5').val()
        console.log($('#code5').val())
        $.ajax({
        url:'getdata.php',
        type:'post',
        data:{id:str},
        success:function(feedback){
            console.log(feedback);
            var obj = JSON.parse(feedback);
            console.log(obj);
            $('#data5').val(obj.message);
        }

        });





        }








        if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
    </script>
</body>
</html>