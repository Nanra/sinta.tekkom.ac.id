<!DOCTYPE html>
<html>
<meta http-equiv="refresh" name="viewport" content="width=device-width, initial-scale=1.0, 30">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- Styles -->
        <link type="text/css" rel="stylesheet" href="assets/plugins/materialize/css/materialize.min.css"/>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="assets/plugins/material-preloader/css/materialPreloader.min.css" rel="stylesheet">
        <link href="assets/plugins/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
        <link href="assets/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>           
        <!-- Theme Styles -->
        <link href="assets/css/alpha.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>

<!-- Javascripts -->
<!-- <script src="assets/plugins/jquery/jquery-2.2.0.min.js"></script> -->
<script src="assets/plugins/materialize/js/materialize.min.js"></script>
<script src="assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
<script src="assets/plugins/jquery-blockui/jquery.blockui.js"></script>
<script src="assets/plugins/datatables/js/jquery.dataTables.min.js"></script>
<script src="assets/plugins/sweetalert/sweetalert.min.js"></script>
<script src="assets/js/alpha.min.js"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
<script language="javascript">
setTimeout(function(){
   window.location.reload(1);
}, 30000);
</script>
<head><title>Data Pasien</title></head>
<body>
<div class="container">
	<div class="table-responsive">
		<table class="table bordered">
		<br>
		<thead>
		<?PHP
			$db_host = "localhost";
	    	$db_user = "root";
	    	$db_pass = "";
	    	$db_name = "imsplusw_data";
	     
	   	 	$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
	    	if($conn->connect_error)
	    	{
	   		 die ('failed connect to database : '.$conn->connect_error);
	   		}
			$data=$conn->query("SELECT * FROM tb_moninfus WHERE id='123'");
			while ($dataPatient=$data->fetch_array(MYSQLI_ASSOC)) 
			{
				echo "<tr>";
				echo "<td class='center light-blue ' colspan='2' align='center'><h5><img id='logo' style='width: 57px; height:60px;' src='unikom.png'><span>&nbsp &nbsp</span>UNIKOM IMS Plus</h5></td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td>Nama</td>";
				echo "<td>".': '.'Nanra Sukedy'."</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td>Umur</td>";
				echo "<td>".': '.'50 Tahun'."</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td>Penyakit</td>";
				echo "<td>".': '.'Kelewat Tampan'."</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td>Jumlah Tetesan</td>";
				echo "<td>".': '.'50'."</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td class='light-blue center' colspan='2'>Pesan</td>";
				echo "";
				echo "</tr>";
                echo"<tr>";
                echo "<td colspan='2'>".'Jangan Lupa Bahagia'."</td>";
                echo "";
                echo"</tr>";
                echo "<tr class='lime accent-1'>";
				echo "<td>Lagu Terapi</td>";
				echo "<td>".': '.'Sayang - Via Vallen'."</td>";
				echo "</tr>";
			}
		?>
            </thead>
		</table>
	</div>
</div>
</body>
</html>