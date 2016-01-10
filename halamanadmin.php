<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap-user.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar-user.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<style>
   h3{
      text-align:center; }
   table { 
      border-collapse:collapse;
      border-spacing:0;     
      font-family:Arial, sans-serif;
      font-size:16px;
      padding-left:300px;
      margin:auto; }
   table th {
      font-weight:bold;
      padding:10px;
      color:#fff;
      background-color:#2A72BA;
      border-top:1px black solid;
      border-bottom:1px black solid;}
   table td {
      padding:10px;
      border-top:1px black solid;
      border-bottom:1px black solid;
      text-align:center; }         
   tr:nth-child(even) {
     background-color: #DFEBF8; }
   </style>

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="halamanadmin.php">
                        Admin
                    </a>
                </li>
				<li>
                    <a href="admin.html">LogOut</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Data Kos</h1>
                    </div>
                </div>
            </div>
        </div>
		
		 <section class="no-padding bg-primary" id="admin">
            <div class="container">
				
					<div class="row">
						<div class="col-lg-12 text-center">
							<h2>Input Data Kos</h2>
							<i class="fa fa-4x fa-paper-plane wow bounceIn text-dark"></i> <br></br>
						</div>
					</div>
					<div class="row"> 	
					<form class="form-horizontal" action="input.php" method="post">
						<div class="form-group">
							<label for="username" class="col-sm-2 control-label">UserName</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="username" placeholder="UserName" required>
							</div>
						</div>
						<div class="form-group">
							<label for="password" class="col-sm-2 control-label">Password</label>
							<div class="col-sm-10">
								<textarea name="password" class="form-control" placeholder="password" required></textarea>
							</div>
						</div>
						<div class="form-group" action="input2.php" method="post">
							<label for="nama" class="col-sm-2 control-label">Nama</label>
							<div class="col-sm-10">
								<textarea name="nama" class="form-control" placeholder="Nama" required></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="no_telfon" class="col-sm-2 control-label">No Telfon</label>
							<div class="col-sm-10">
								<textarea name="no_telfon" class="form-control" placeholder="No Telfon" required></textarea>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" value="Simpan" class="btn btn-default">Post</button>
							</div>
						</div>
					</form>                    
					</div> 
				
			</div> 
		<?php
		include 'koneksi.php';
		$query = "SELECT * FROM tabel_admin"; //the query for get all data in tb_student
		$result = mysql_query($query);
		?>
		<h3>DAFTAR KOS ANDA</h3>
		<table>
			<tr>
				<th>No</th>
				<th>UserName</th>
				<th>Password</th>
				<th>Nama</th>
				<th>No Telfon</th>
				<th>Aksi</th>
				<th></th>
			</tr>
			<?php
			while ($data=mysql_fetch_array($result))
			{
				echo "<tr>";
				echo "<td>".$data['no']."</td>";
				echo "<td>".$data['username']."</td>";
				echo "<td>".$data['password']."</td>";
				echo "<td>".$data['nama']."</td>";
				echo "<td>".$data['no_telfon']."</td>";   
				echo "<td> <i> <a href='formupdate.php?no=".$data['no']."'> Update </a> </i></td>";
				echo "<td> <i> <a href='hapus.php?no=".$data['no']."'> Delete </a> </i></td>";
				echo "</tr>";
			}
			?>
			
		</table>
    </section>
	
	<section class="no-padding bg-primary" id="info">
            <div class="container">
				
					<div class="row">
						<div class="col-lg-12 text-center">
							<h2>Input Information</h2>
							<i class="fa fa-4x fa-paper-plane wow bounceIn text-dark"></i> <br></br>
						</div>
					</div>
					<div class="row"> 	
					<form class="form-horizontal" action="input2.php" method="post">
						<div class="form-group">
							<label for="pengumuman" class="col-sm-2 control-label">Pengumuman</label>
							<div class="col-sm-10">
								<textarea name="keterangan" cols="50" class="form-control" placeholder="What's new?" required></textarea>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" value="Simpan" class="btn btn-default">Post</button>
							</div>
						</div>
					</form>                    
					</div> 				
			</div> 
		<?php
		include 'koneksi.php';
		$query = "SELECT * FROM tabel_info"; //the query for get all data in tb_student
		$result = mysql_query($query);
		?>
		<h3>DAFTAR PENGUMUMAN</h3>
		<table>
			<tr>
				<th>NO</th>
				<th>PENGUMUMAN</th>
				<th>Aksi</th>
				<th></th>
			</tr>
			<?php
			while ($data=mysql_fetch_array($result))
			{
				echo "<tr>";
				echo "<td>".$data['no']."</td>";
				echo "<td>".$data['pengumuman']."</td>";
				echo "<td> <i> <a href='formupdate2.php?no=".$data['no']."'> Update </a> </i></td>";
				echo "<td> <i> <a href='hapus2.php?no=".$data['no']."'> Delete </a> </i></td>";
				echo "</tr>";
			}
			?>
			
		</table>
	</section>

    
       
    <!-- jQuery -->
    <script src="js/jquery-user.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap-user.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
	
	
</body>

</html>

