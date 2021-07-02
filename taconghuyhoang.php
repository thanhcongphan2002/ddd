<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	if (isset($_POST['dat_cho'])){
		$sl_khach = $_POST['sl_khac'];
		$ngay = date("d-m-Y");
		$loai_tiec = $_POST['loai_tiec'];
		$dia_diem = $_POST['dia_diem'];
		$ten_nguoi_dat = ucwords($_POST['ten_nguoi_dat']);
		$dia_chi = ucwords($_POST['dia_chi']);
		$do_tuoi = $_POST['do_tuoi'];
		$gioi_tinh = $_POST['gioi_tinh'];
		$thong_tin = $_POST['thong_tin'];
		$yeu_cau = nl2br($_POST['yeu_cau']);
		$gio_ht = date("H:i:s");
		$xuat = 
			"<b>Thông tin khách hàng</b><br>
			Họ tên: $ten_nguoi_dat - Độ tuổi: $do_tuoi/Giới tính: $gioi_tinh<br>
			Địa chỉ: $dia_chi<br>
			<b>Thông tin đặt chổ:</b><br>
			Số khách tham gia bữa tiệc: $sl_khach - Ngày đặt tiệc: $ngay<br>
			Loại tiệc: $loai_tiec/Địa điểm: $dia_diem<br>
			<b>Các yêu cầu kèm theo:</b><br>
			$yeu_cau<br>
			<span aline='center'><i>Quý khách biết đến nhà hàng của chúng tôi qua:</i> $thong_tin</span><br>
			Chúng tôi đã nhận được thông tin đặt chổ này của quý khách vào lúc: $gio_ht - $ngay ";
	}
	?>
	
	<div style="margin: 20%">
		<form style="background-color: antiquewhite; width: 100%;height: auto" action="taconghuyhoang.php" method="post">
			<H3 align="center" style="background-color: red;color: yellow">THÔNG TIN ĐẶT CHỔ</H3>
			<label>Số khách tham dự bữa tiệc: </label><input type="text" name="sl_khach"><label>Ngày</label><input type="text" name="ngay" value="<?php echo $ngay;?>"><br>
			<label>Loại tiệc: </label>
			<input type="checkbox" name="loai_tiec" value="Sáng"><label>Tiệc sáng</label>
			<input type="checkbox" name="loai_tiec" value="Trưa"><label>Tiệc trưa</label>
			<input type="checkbox" name="loai_tiec" value="Tối"><label>Tiệc tối</label>
			<br>
			<label>Địa điểm: </label>
			<input type="radio" name="dia_diem" value="Trong nhà"><label>Trong nhà</label>
			<input type="radio" name="dia_diem" value="Ngoài trời"><label>Ngoài trời</label>
			<br>
			<label>Tên quý khách: </label><input type="text" name="ten_nguoi_dat">
			<label>Địa chỉ liên lạc: </label><input type="text" name="dia_chi">
			<br>
			<label>Độ tuổi: </label>
			<select name="do_tuoi">
				<option selected>--chọn độ tuổi--</option>
				<option value="Từ 19 đến 34 tuổi">Từ 19 đến 34 tuổi</option>
				<option value="Từ 34 đến 46 tuổi">Từ 34 đến 46 tuổi</option>
				<option value="Từ 46 đến 60 tuổi">Từ 46 đến 60 tuổi</option>
			</select>
			<label>Giới tính: </label>
			<input type="radio" name="gioi_tinh" value="Nam"><label>Nam</label>
			<input type="radio" name="gioi_tinh" value="Nữ"><label>Nữ</label>
			<br>
			<div style="display: flex;justify-content: space-between;align-items: center">
				<label>Quý khách biết đến nhà hàng của chúng tôi qua: </label>
				<select name="thong_tin" multiple>
					<option value="Báo chí">Báo chí</option>
					<option value="Đài phát thanh">Đài phát thanh</option>
					<option value="TV">TV</option>
				</select>
			</div>
			<br>
			<label>Các yêu cầu khác của quý khách:</label><br>
			<textarea style="width: 99%" rows="3" name="yeu_cau" ></textarea><br>
			<input id="dat_cho" type="submit" onClick="click()" name="dat_cho" value="Đặt chổ">
		</form>
		<div id="hien_thong_tin" style="background-color: antiquewhite; width: 100%;height: auto">
			<h3 align="center" style="background-color: red;color: yellow">THÔNG TIN ĐẶT CHỔ</h3>
			<?php echo $xuat;?>
		</div>
	</div>
	
</body>
</html>