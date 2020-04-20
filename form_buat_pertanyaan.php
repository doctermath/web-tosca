<!DOCTYPE html>

<html>

	<head>
		<title> Pengajuan Pertanyaan </title>
		
		<meta charset="utf-8">
		<meta name=”viewport” content=”width=device-width, initial-scale=1″>

		<link rel='stylesheet' type='text/css' href='b-bootstrap4/css/bootstrap.css'/>
		<link rel='stylesheet' type='text/css' href='b-bootstrap4/css/bootstrap-grid.css'/>
		
	</head>

	<body>
	<?php
		include('index.php');
	?>
	
	<div style='padding-top: 10px;'>
		<div class='btn-primary' style='display: inline-block; padding: 5px 38px 5px 0px; border-radius: 0px 50% 50% 0px; -webkit-text-stroke: 0.3px black; background: linear-gradient(to bottom right, #ff5050 14%, #800000 28%);'>
			<h1> Forum Komunikasi </h1>
		</div>
	</div>
		<div class='container'>
			<div style='padding-top: 15px;'>
					<form action='forum_komunikasi.php' method='get'>
						
						<table>
						
							<tr>
								<td style='float: left;'> Nama </td>
								<td style='float: left; width: 20px;'> : </td>
								<td class='shadow-sm' style='color: gray;'> <input type='text' name='nama' placeholder='Masukkan nama' required style='width: 800px; height: 30px;'> </td>				
							</tr>
						
						</table>
						
						<table style='margin-top: 10px;'>
						
							<tr>
								<td style='float: left;'> Pesan </td>
								<td style='float: left; width: 20px'> : </td>
								<td class='shadow-sm' style=' color: gray;'> <textarea name='pesan' placeholder='Masukkan pesan' required style='width: 800px; height: 200px;'> </textarea> </td>				
							</tr>
						
						</table>
						
						<div style=' padding-right: 200px; padding-top: 10px;'> 
							<input type='submit' value='Kirim' style='float: right; background: linear-gradient(to bottom right, #ff5050 14%, #800000 28%); color: white;'/> 
						</div>
						
					</form>
			</div>
		</div> <!-- stop container -->
	</body>
</html>