<?php
	if(isset($_POST['btn_add_stud'])){
		$txt_uname = $_POST['txt_uname'];
        $txt_pass = $_POST['txt_pass'];
        

		$chk = mysqli_query($con,"SELECT * from tblstudent where lname = '".$txt_lname."' and fname = '".$txt_fname."' and mname = '".$txt_mname."' ");
		$ct = mysqli_num_rows($chk);

		if($ct == 0){
			$query = mysqli_query($con,"INSERT INTO tblstudent (lname,fname,mname,contact,address,username,password) values ('".$txt_lname."','".$txt_fname."','".$txt_mname."','".$txt_contact."','".$txt_addr."','".$txt_uname."','".$txt_pass."')"); 
			if($query == true){
	            $_SESSION['added'] = 1;
	            header ("location: ".$_SERVER['REQUEST_URI']);
			}
		}
		else{
			$_SESSION['duplicate'] = 1;
            header ("location: ".$_SERVER['REQUEST_URI']);
		}
	}
?>