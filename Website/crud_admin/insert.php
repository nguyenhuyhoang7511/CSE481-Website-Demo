<?php  
 $connect = mysqli_connect("localhost", "root", "", "hahalolo_tour");  
 if(!empty($_POST))  
 {  
     $output = '';  
     $message = '';  
     $ma_tour = mysqli_real_escape_string($connect, $_POST["ma_tour"]);  
     $chu_tour = mysqli_real_escape_string($connect, $_POST["chu_tour"]);  
     $loai_tour = mysqli_real_escape_string($connect, $_POST["loai_tour"]);  
     $ten_tour = mysqli_real_escape_string($connect, $_POST["ten_tour"]);  
     $gia_tour = mysqli_real_escape_string($connect, $_POST["gia_tour"]);  
     $mo_ta = mysqli_real_escape_string($connect, $_POST["mo_ta"]); 
  
    
      $query = "  
      INSERT INTO db_thongtintour(ma_tour,chu_tour, loai_tour, ten_tour,gia_tour,mo_ta)  
      VALUES('$ma_tour','$chu_tour', '$loai_tour', '$ten_tour', '$gia_tour', '$mo_ta');  
      ";  
      $message = '#Thêm mới thành công';  
      
      if(mysqli_query($connect, $query))  
      {  
           $output .= '<label class="text-success">' . $message . '</label>';  
           $select_query = "SELECT * FROM db_thongtintour ORDER BY ma_tour ASC";  
           $result = mysqli_query($connect, $select_query);  
           $output .= '  
          <table class="table table-bordered">  
          <tr>  
          <th>Mã Sản Phẩm</th>  
          <th>Loại Sản Phẩm</th>
          <th>Tên Sản Phẩm</th>
          <th>Tình Trạng</th>
          <th>Giá</th>  
          <th>Ảnh</th>
          <th>Chi tiết</th>
          <th>Sửa</th>
          <th>Xoá</th>
           </tr>  
           ';  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '  
                     <tr>  

                          <td>' . $row["ma_tour"] . '</td> 
                          <td>' . $row["chu_tour"] . '</td>  
                          <td>' . $row["loai_tour"] . '</td>  
                          <td>' . $row["ten_tour"] . '</td>  
                          <td>' . $row["gia_tour"] . '</td>  
                          
                          <td><button type="button" class="btn btn-info btn-xs"  data-whatever="@getbootstrap">Thêm ảnh</button></td>
                          <td><input type="button" name="view" value="Chi tiết" id="' . $row["ma_tour"] . '" class="btn btn-info btn-xs view_data" /></td>  
                          <td><input type="button" name="edit" value="Sửa" id="'.$row["ma_tour"] .'" class="btn btn-info btn-xs edit_data" /></td>  
                          <td><input type="button" name="delete" value="Xoá" id="' . $row["ma_tour"] . '" class="btn btn-info btn-xs delete_data" /></td>  

                     </tr>  
                ';  
           }  
           $output .= '</table>';  
      }  
      echo $output;  
 }  
 ?>
 