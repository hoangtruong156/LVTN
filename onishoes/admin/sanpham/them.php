<hr class="badge-danger">
<form class="form-row " method="POST" action="sanpham/xuly.php" enctype="multipart/form-data">
    <div class="form-group col-2"><label for="masv">Tên Sản Phẩm</label><input type="text" class="form-control" name="tensp"></div>
    <div class="form-group col-3"><label >Mã Danh Mục</label>   <select name="madm" class="form-control browser-default custom-select">
    <?php $sql1="select * from danhmuc"; $rs1=mysqli_query($conn,$sql1); while ($row=mysqli_fetch_array($rs1)) { ?> 
    
        <option value="<?php echo $row['MaDM'] ?>"><?php echo $row['MaDM'].' - '.$row['TenDM']; ?></option>
      <?php } ?></select></div>

   <div class="form-group col-2"><label >Mã Thương Hiệu</label>   <select name="mancc" class="form-control browser-default custom-select">
    <?php $sql2="select * from nhacc"; $rs2=mysqli_query($conn,$sql2); while ($row2=mysqli_fetch_array($rs2)) { ?> 
        <option value="<?php echo $row2['MaNCC']; ?>"><?php echo $row2['MaNCC'].' - '.$row2['TenNCC']; ?></option>
      <?php } ?></select></div>

  <div class="form-group col-2"><label >Đơn Giá</label><input type="number" min="1" class="form-control" name="dongia" ></div>
  <div class="form-group col-4"><label >Ảnh Nền</label> <input type="file" class="form-control" name="anhnen" ></div>
  <div class="form-group col-8"><label >Mô Tả</label><textarea class="form-control" name="mota"></textarea> </div>
  <div class="form-group col-12  border " >
    <label >Size :</label><br>
      <div class="btn-group col-12 row">
        <?php $sql_size="select * from size"; $rs_size=mysqli_query($conn,$sql_size); while ($kq_size=mysqli_fetch_array($rs_size)) { ?>
          <div class=" custom-checkbox custom-control col-1 ">
              <input type="checkbox" class="custom-control-input" id="<?php echo $kq_size['MaSize']; ?>" name="size[]" value="<?php echo $kq_size['MaSize'];?>"  >
              <label class="custom-control-label" for="<?php echo $kq_size['MaSize']; ?>"><h5><?php echo $kq_size['MaSize']; ?></h5></label>
          </div>
        <?php } ?>
    </div>
  </div>
  <h5 >Bảng chọn size Áo</h5>
   <table border="1">
        <tr>
            <th>Size Áo</th>
            <th>Số</th>
        </tr>
        <tr>
            <td>S</td>
            <td>70</td>
        </tr>
        <tr>
			<td>M</td>
            <td>73</td>
        </tr>
        <tr>
			<td>L</td>
            <td>76</td>
        </tr>
		<tr>
			<td>XL</td>
            <td>79</td>
        </tr>
    </table>
	<h5 >Bảng chọn size Quần</h5>
   <table border="1">
        <tr>
            <th>Size Quần</th>
            <th>KG</th>
			<th>Chiều cao</th>
        </tr>
        <tr>
            <td>29</td>
            <td>45-50</td>
			<td>1m50-1m65</td>
        </tr>
        <tr>
			<td>30</td>
            <td>50-60</td>
            <td>1m60-1m68</td>
        </tr>
        <tr>
			<td>31</td>
            <td>58-65</td>
            <td>1m60-1m73</td>
        </tr>
		<tr>
			<td>32</td>
            <td>68-78</td>
            <td>1m65-1m78</td>
        </tr>
    </table>
  <div class=" col-12  border " >
    <label >Màu :</label>
     <div class="form-group  " >
      <div class="btn-group  col-12 m-auto row">
        <?php $sql_mau="select * from mau"; $rs_mau=mysqli_query($conn,$sql_mau); while ($kq_mau=mysqli_fetch_array($rs_mau)) { ?>
          <div class=" custom-checkbox custom-control col-2 ">
              <input type="checkbox" class="custom-control-input" id="<?php echo $kq_mau['MaMau']; ?>" name="mau[]" value="<?php echo $kq_mau['MaMau']; ?>" <?php if($kq_mau['MaMau']==='none'){ echo "checked";  }?>>
              <label class="custom-control-label" for="<?php echo $kq_mau['MaMau']; ?>"><h5><?php echo $kq_mau['MaMau']; ?></h5></label>
          </div>
        <?php } ?>
    </div>
  </div>
  </div>

<div class="form-group col-sm-6 m-auto"><br>
  <input type="submit" class="form-control badge-info" value="Thêm" name="xlthem">
</div>
</form>
<hr><hr class="badge-danger">

