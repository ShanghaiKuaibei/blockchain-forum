<?php  
    // 接收值  
    isset($_POST['address'])?$address=$_POST['address']:$address='';  
    isset($_POST['title'])?$title=$_POST['title']:$title='';  
    isset($_POST['content'])?$content=$_POST['content']:$content='';  
    isset($_POST['user'])?$user=$_POST['user']:$user='';  
    isset($_POST['email'])?$email=$_POST['email']:$email=''; 
    isset($_POST['job'])?$job=$_POST['job']:$job='';   
    $content="name:".$title."<br />phone:".$content."<br />email: ".$email."<br />job: ".$job;  
    //引入类  
     require 'Mail.class.php';  
            if( Mail::send($title,$content,$user,$address)){  
                echo"<script>alert('报名成功，请勿重复提交！');history.go(-1);</script>";  
            }else{  
                echo "发送失败".'<br>';  
                echo Mail::$error;  
            }  
    ?>