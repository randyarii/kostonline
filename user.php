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
                    <a href="user.html">
                        Home User
                    </a>
                </li>
                <li>
                    <a href="index.html">LogOut</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Selamat Datang</h1>
                        <p>Di E-Kost Online</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /#wrapper -->

	<section class="no-padding bg-primary" id="info"> 
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
			</tr>
			<?php
			while ($data=mysql_fetch_array($result))
			{
				echo "<tr>";
				echo "<td>".$data['no']."</td>";
				echo "<td>".$data['pengumuman']."</td>";
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