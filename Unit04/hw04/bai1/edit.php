<?php 
 session_start();
 	if (isset($_GET['msv'])) {
 		$msv=$_GET['msv'];
 		
 	}
 	if (isset($_SESSION['info'])) {
 		$data_arr=$_SESSION['info'][$msv];
 		
 	}
 	if (isset($_GET['msv'])) {
 		$msv=$_GET['msv'];
 		unset($_SESSION['info'][$msv]);
 	}
 	
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 	<title>Document</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
 </head>
 <body>
 	<div class="container">
        <form action="edit_process.php" method="POST" role="form">
            <div class="form-gorup">
            	<h3 style="text-align: center;">Bài Tập Lưu Thông Tin Sinh Viên</h3>
            </div>
            
            <div class="form-group">
                <h6 for="">Mã sinh viên</h6>
                <input type="text" class="form-control" id="" placeholder="Nhập tên mã sinh viên" name="msv" value="<?php echo $data_arr['msv'] ?>">
            </div>
            
            <div class="form-group">
                <h6 for="">Họ và tên</h6>
                <input type="text" class="form-control" id="" placeholder="Nhập vào họ và tên" name="hoten" value="<?php echo $data_arr['hoten'] ?>">
            </div>  

            <div class="form-group">
                <h6 for="">Số điện thoại</h6>
                <input type="number" class="form-control" id="" placeholder="Nhập vào số điện thoại" name="sdt" value="<?php echo $data_arr['sdt'] ?>">
            </div>

            <div class="form-group">
                <h6 for="">Email</h6>
                <input type="email" class="form-control" id="" placeholder="name@example.com" name="email" value="<?php echo $data_arr['email'] ?>">
            </div>
            
            <div class="form-group">
            	<h6 for="">Giới tính</h6><br>
            	<div class="form-check form-check-inline">
				  <input class="form-check-input" type="radio" id="inlineRadio1"  <?php echo ($data_arr['gioitinh']=="Nam")?"checked":"" ?> name="gioitinh">
				  <label class="form-check-label" for="inlineCheckbox1">Nam</label>
				</div>
				<div class="form-check form-check-inline">
				  <input class="form-check-input" type="radio" id="inlinRadio2"  <?php echo ($data_arr['gioitinh']=="Nữ")?"checked":"" ?> name="gioitinh">
				  <label class="form-check-label" for="inlineCheckbox2">Nữ</label>
				</div>
				<div class="form-check form-check-inline">
				  <input class="form-check-input" type="radio" id="inlineRadio3"  <?php echo ($data_arr['gioitinh']=="Khác")?"checked":"" ?> name="gioitinh" >
				  <label class="form-check-label" for="inlineCheckbox3">Khác</label>
				</div>
            </div>

            <div class="form-group">
                <h6 for="">Địa chỉ</h6>
                <input type="text" class="form-control" id="" placeholder="Nhập vào địa chỉ" name="diachi" value="<?php echo $data_arr['diachi'] ?>">
            </div>
            <button type="submit" class="btn btn-primary" >Lưu thông tin</button>
        </form>
    </div>	
 </body>
 </html>