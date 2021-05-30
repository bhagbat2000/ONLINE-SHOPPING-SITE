<?php
	include('dbcon.php');
	//session_start();
	  $qry="select * from chat where (msg_from=$uid and msg_to=$id) or (msg_from=$id and msg_to=$uid) order by time desc;";
	  $res=mysqli_query($conn,$qry);
	  for($i=1;$i<=8;$i++)
	  {
	    $data=mysqli_fetch_assoc($res);
	    $_SESSION['msg'.$i.'']=$data['msg'];
	    if($data['msg_from']==$id)
	      $_SESSION['from'.$i.'']=$nm;
	    else
	    {
	      if(isset($data['msg']))
	        $_SESSION['from'.$i.'']="You";
	    }
	  }
?>

<p>
      <?php 
        if(isset($_SESSION['from8']))
        {
          echo "<b>".$_SESSION['from8'].":</b>";
          echo "&nbsp;&nbsp;&nbsp;";
          echo $_SESSION['msg8']; 
        }
      ?>
    </p>
    <p>
      <?php 
        if(isset($_SESSION['from7']))
        {
          echo "<b>".$_SESSION['from7'].":</b>";
          echo "&nbsp;&nbsp;&nbsp;";
          echo $_SESSION['msg7']; 
        }
      ?>
    </p>
    <p>
      <?php 
        if(isset($_SESSION['from6']))
        {
          echo "<b>".$_SESSION['from6'].":</b>";
          echo "&nbsp;&nbsp;&nbsp;";
          echo $_SESSION['msg6']; 
        }
      ?>
    </p>
    <p>
      <?php 
        if(isset($_SESSION['from5']))
        {
          echo "<b>".$_SESSION['from5'].":</b>";
          echo "&nbsp;&nbsp;&nbsp;";
          echo $_SESSION['msg5']; 
        }
      ?>
    </p>
    <p>
      <?php 
        if(isset($_SESSION['from4']))
        {
          echo "<b>".$_SESSION['from4'].":</b>";
          echo "&nbsp;&nbsp;&nbsp;";
          echo $_SESSION['msg4']; 
        }
      ?>
    </p>
    <p>
      <?php 
        if(isset($_SESSION['from3']))
        {
          echo "<b>".$_SESSION['from3'].":</b>";
          echo "&nbsp;&nbsp;&nbsp;";
          echo $_SESSION['msg3']; 
        }
      ?>
    </p>
    <p>
      <?php 
        if(isset($_SESSION['from2']))
        {
          echo "<b>".$_SESSION['from2'].":</b>";
          echo "&nbsp;&nbsp;&nbsp;";
          echo $_SESSION['msg2']; 
        }
      ?>
    </p>
    <p>
      <?php 
        if(isset($_SESSION['from1']))
        {
          echo "<b>".$_SESSION['from1'].":</b>";
          echo "&nbsp;&nbsp;&nbsp;";
          echo $_SESSION['msg1']; 
        }
      ?>
    </p>