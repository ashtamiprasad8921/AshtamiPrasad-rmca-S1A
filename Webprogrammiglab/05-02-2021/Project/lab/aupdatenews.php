<html>
<head>
<title>Lab Managment</title>
</head>
<body>


 <?php
	include("connect.php");
		
		 		if(!is_dir("data/"))
					{
							mkdir("data/",777);
					}
			
		 $target = "data/". basename(@$_FILES['up']['name']);
		
		
  
	if(isset($_POST['b1'])  && $_FILES['up']['size'] <= 52428800 )
		{		
			if(move_uploaded_file($_FILES['up']['tmp_name'] , $target)) 
				{
						$path = "data/";
						
						mysql_query ("insert into uptest set
										filename = '".$_FILES['up']['name']."' ,
										path = '".$path."' ,
										newsname = '".$_POST['t1']."' ,
										location = '".$_POST['t2']."' ,
										opentype  =  '".$_POST['t3']."'   ,
										status  = '".$_POST['t4']."'  ");
							echo "<br>Thanks " .$_FILES['up']['name']. " and record have been uploaded <br>";			
				}
		}else{
						echo "Sorry No file upload / May be Type Mismatch";
				
				}
?>
 
<table width="60%" border="0" align="center">
<form name="f1" method="post" action="?" enctype="multipart/form-data">

 <fieldset style="background-color:#CCCCCC; height:500; width:1263;"> <strong>News Name </strong> 

  <input name="t1" type="text" />
  
  <br />
<br />
<strong>Loction  &nbsp;</strong> 
 <select name="t2">
								<option>1</option>
								 
  </select>
<br />
<br />

	
		<strong>File Open/ Access Type</strong>
		 
		  <label>
		    <input type="radio" name="t3" value="_parent" />
		    Same Window</label>
		  <label>
		    <input type="radio" name="t3" value="_blank" />
		    Different Window</label>
		  <br />
          <br />
            <strong>Status</strong>  
	 
              <label>
                <input type="radio" name="t4" value="A" />
                Active</label>
              <label>
                <input type="radio" name="t4" value="I" />
                InActive</label>
              <br />
 
				
  <input type="submit" name="b1" value="Upload File" />
  		<a href="admininbox.php" class="head4">
	  <input name="Submit" type="button" value="Back"></a>

  
  </fieldset>
  
</form>