<!-- Modal Login-->
<div class="modal fade" id="modalLogin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form action="login.php" method="post">
        <div class="modal-body row">
          <div class="col-6">
            <div class="mb-3">
             <h5 class="modal-title fw-bold"><i class="fas fa-graduation-cap"></i> ĐĂNG NHẬP</h5>   
           </div>
           <div class="mb-3">
            <label for="loginName" class="form-label fw-bold"><i class="fas fa-user"></i> TÀI KHOẢN:</label><br>
            <input type="text" class="form-control" id="loginName" name="loginName">
            <div id="txtName" class="text-danger fw-bold"></div>
          </div>
          <div class="mb-3">
            <label for="loginPass" class="form-label fw-bold"><i class="fas fa-lock"></i> MẬT KHẨU:</label>
            <input type="password" class="form-control" id="loginPass" name="loginPass" maxlength="20">
            <div id="txtPass" class="text-danger fw-bold"></div>
          </div>
          <div class="mb-3">
            <button type="button" id="sm" name="sm" onclick="checkLogin()">ĐĂNG NHẬP</button>
          </div>
        </div>
        <div class="col-6">
         <button type="col-2 button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
         <img id="img-login" src="../img/student-login.jpg" width="370px">
       </div>
     </div>
   </form>
 </div>
</div>
</div>

<!-- Modal Profile-->
<?php
if (isset($_SESSION['user'])) {
  $uid = $_SESSION['user']['id'];
// Thong tin ca nhan
  $sql_profile = "SELECT * FROM SinhVien a INNER JOIN Lop b ON a.MaLop=b.MaLop INNER JOIN Khoa c ON b.MaKhoa=c.MaKhoa WHERE a.MaSV = '$uid'";
  $query_profile = $conn->query($sql_profile) or die('Có lỗi xảy ra');
  $profile = $query_profile->fetch_array();
// Cac lop hoc phan
  $sql_courses = "SELECT a.MaHP, TenHP, Diem FROM KetQua a INNER JOIN HocPhan b ON a.MaHP=b.MaHP WHERE MaSV = '$uid'";
  $query_coures = $conn->query($sql_courses) or die('Có lỗi xảy ra');
  ?>
  <div class="modal fade" id="modalProfile" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalProfileLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header" style="margin-top: -30px">
          <h5 class="modal-title fw-bold" id="modalProfileLabel"><i class="fas fa-address-card"></i> Thông Tin Sinh Viên</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-4"><img src="../img/student.png" width="250px"></div>
            <div class="col-8">
              <table class="table table-striped">
                <tr>
                  <td><strong>Họ và tên: </strong><?= $profile['TenSV'] ?></td>
                  <td><strong>MSSV: </strong><?= $profile['MaSV'] ?></td>
                </tr>
                <tr>
                  <td><strong>Ngày sinh: </strong><?= date('d/m/Y',strtotime($profile['NgaySinh'])) ?></td>
                  <td><strong>Phái: </strong><?= $profile['GioiTinh'] ?></td> 
                </tr>
                <tr>
                  <td><strong>Lớp: </strong><?= $profile['TenLop'] ?></td>
                  <td><strong>Mã Lớp: </strong><?= $profile['MaLop'] ?></td> 
                </tr>
                <tr>
                  <td colspan="2"><strong>Khoa: </strong><?= $profile['TenKhoa'] ?></td>
                </tr>
                <tr>
                  <td colspan="2">
                    <strong>Bài thi đã hoàn thành: </strong>
                    <?php
                    while ($courses = $query_coures->fetch_array()) {
                      echo '<br>'.$courses['MaHP'].' - '.$courses['TenHP'].': <strong>'.$courses['Diem'].' điểm</strong>.';
                    }
                    ?>
                  </td>
                </tr>
                <tr>
                  <td colspan="2">
                    <a data-bs-toggle="collapse" href="#changePass" role="button" aria-expanded="false" aria-controls="changePass">
                      Đổi mật khẩu <i class="fas fa-caret-down"></i> 
                    </a>
                    <div class="collapse" id="changePass">
                      <div class="card card-body" id="form-change-pass">
                        <div class="container">
                          <form action="change_pass.php" method="post">
                            <h5 class="fw-bold"><i class="fas fa-edit"></i> Thay đổi mật khẩu:</h5>
                            <input type="hidden" name="username" value="<?= $uid ?>">
                            <div class="mb-3">  
                              <input type="password" class="form-control" id="old-pass" name="old-pass" placeholder="Nhập mật khẩu hiện tại">
                              <div id="txt-old-pass" class="text-danger fw-bold"></div>
                            </div>
                            <div class="mb-3">
                              <input type="password" class="form-control" id="new-pass" name="new-pass" placeholder="Nhập mật khẩu mới">
                              <div id="txt-new-pass" class="text-danger fw-bold"></div>
                            </div>
                            <div class="mb-3">
                              <input type="password" class="form-control" id="re-pass" name="re-pass" placeholder="Nhập lại mật khẩu mới">
                              <div id="txt-re-pass" class="text-danger fw-bold"></div>
                            </div>
                            <button type="button" id="btn-change-pass" name="btn-change-pass" onclick="checkChangePass()" class="btn btn-sm btn-primary float-end">Thay đổi</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-sm btn-success" data-bs-dismiss="modal">Đóng</button>
        </div>
      </div>
    </div>
  </div>
<?php } ?>
