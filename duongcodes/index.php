<?php 
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/DataBase/connect.php');
$result = $conn->query("SELECT * FROM setting WHERE muc = 'tenWeb'");
$result1 = $conn->query("SELECT * FROM setting WHERE muc = 'description'");
$row = $result->fetch(PDO::FETCH_ASSOC);
$row1 = $result1->fetch(PDO::FETCH_ASSOC);
if (isset($_GET['success']) && isset($_GET['id'])) {
$success = $_GET['success'];
$id = $_GET['id'];
if ($success === 'true') {
        $sql = "UPDATE mauthue SET status = '2' WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        
        if ($stmt->execute()) {
           $message = "Dữ liệu đã được cập nhật thành công.";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header("Location: /duongcodes");
        exit();
        } else {
            $message ="Lỗi khi cập nhật dữ liệu: ";
        echo "<script type='text/javascript'>alert('$message');</script>";
        }
}
}
if (isset($_GET['error']) && isset($_GET['id'])) {
$error = $_GET['error'];
$id = $_GET['id'];
if ($error === 'true') {
        $sql = "UPDATE mauthue SET status = '3' WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        
        if ($stmt->execute()) {
           $message = "Dữ liệu đã được cập nhật thành công.";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header("Location: /duongcodes");
        exit();
        } else {
            $message ="Lỗi khi cập nhật dữ liệu: ";
        echo "<script type='text/javascript'>alert('$message');</script>";
        }
}
}
if (isset($_GET['delete']) && isset($_GET['id'])) {
$delete = $_GET['delete'];
$id = $_GET['id'];
if ($delete === 'true') {
        $sql = "DELETE FROM mauthue WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        
        if ($stmt->execute()) {
           $message = "Dữ liệu đã được cập nhật thành công.";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header("Location: /duongcodes");
        exit();
        } else {
            $message ="Lỗi khi cập nhật dữ liệu: ";
        echo "<script type='text/javascript'>alert('$message');</script>";
        }
}
}
if (isset($_GET['deletemau']) && isset($_GET['id'])) {
$delete = $_GET['deletemau'];
$id = $_GET['id'];
if ($delete === 'true') {
        $sql = "DELETE FROM maulogo WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        
        if ($stmt->execute()) {
           $message = "Dữ liệu đã được cập nhật thành công.";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header("Location: /duongcodes");
        exit();
        } else {
            $message ="Lỗi khi cập nhật dữ liệu: ";
        echo "<script type='text/javascript'>alert('$message');</script>";
        }
}
}
if (isset($_POST['linkanh']) AND isset($_POST['amount']) AND isset($_POST['product']) AND isset($_POST['submit'])) {
    // Lấy dữ liệu từ form
    $linkanh = $_POST['linkanh'];
    $amount = $_POST['amount'];
    $product = $_POST['product'];

    // Chuẩn bị câu truy vấn INSERT
    $sql = "INSERT INTO maulogo (img, cash, product) VALUES (:img, :cash, :product)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':img', $linkanh);
    $stmt->bindParam(':cash', $amount);
    $stmt->bindParam(':product', $product);

    // Thực thi câu truy vấn INSERT
    $stmt->execute();
    $message = "Dữ liệu đã được cập nhật thành công.";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header("Location: /duongcodes");
        exit();
}
?>
<!DOCTYPE html>
<!-- Breadcrumb-->
<html lang="en">
  <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Bootstrap duongcodes Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,duongcodes,Template,SCSS,HTML,RWD,Dashboard">
    <title>duongcodes</title>   
    <link rel="stylesheet" href="/duongcodes/css/simplebar.css">
    <link rel="stylesheet" href="/duongcodes/css/simplebar.css">
    <!-- Main styles for this application-->
    <link href="/duongcodes/css/style.css" rel="stylesheet">
    <link href="/duongcodes/css/examples.css" rel="stylesheet">  
    <link href="/duongcodes/css/dataTables.bootstrap4.css" rel="stylesheet">
    <style>
.table-responsive .table td img {
  max-width: 100px;
  max-height: 100px;
}
</style>

  </head>
  <body>      
<div class="wrapper d-flex flex-column min-vh-100 bg-light bg-opacity-50 dark:bg-transparent">
<header class="header header-light bg-primary header-sticky mb-4"></header>
<div class="body flex-grow-1 px-3">
        <div class="container-lg">
          <div class="fs-2 fw-semibold">Phê Duyệt</div>         
          <div class="card mb-4">
             <div class="card-body">
              <div class="example">
                <ul class="nav nav-underline" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-429" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="/duongcodes/free.svg#cil-media-play"></use>
                      </svg>Xem</a></li>                  
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-429">
                    <div class="table-responsive">
                    <table class="table table-striped border datatable">
                      <thead>
                        <tr>
                          <th>THÔNG TIN LIÊN HỆ</th>
                          <th>NGÀY TẠO</th>
                          <th>LOẠI LOGO</th>
                          <th>TRẠNG THÁI</th>
                          <th>TÙY CHỈNH</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        $sql = "SELECT * FROM mauthue";
                        $result = $conn->query($sql);
                        while($row = $result->fetch(PDO::FETCH_ASSOC)) {
                        ?>
                        <tr class="align-middle">
                          <td><?=$row['linkContact']?></td>
                          <td><?=date("m/d/y G.i:s", $row['time'])?></td>
                          <td><?=$row['currentPicked']?></td>
                          <td>
                            <?php if($row['status'] == "2"){?>
                            <span class="badge bg-success-gradient">Đã Xong</span>
                          <?php }elseif($row['status'] == "3"){?>
                          <span class="badge bg-dark-gradient">Đã Hủy</span>
                        <?php }else{?>
                          <span class="badge bg-warning-gradient">Chờ Duyệt</span>
                        <?php }?>
                          </td> 
                          <td><a class="btn btn-success me-2" href="?success=true&id=<?=$row['id']?>">
                              <svg class="icon">
                                <use xlink:href="/duongcodes/free.svg#cil-check-circle"></use>
                              </svg></a><a class="btn btn-danger me-2" href="?error=true&id=<?=$row['id']?>">
                              <svg class="icon">
                                <use xlink:href="/duongcodes/free.svg#cil-x-circle"></use>
                              </svg></a><a class="btn btn-info" href="?delete=true&id=<?=$row['id']?>">
                              <svg class="icon">
                                <use xlink:href="/duongcodes/free.svg#cil-trash"></use>
                              </svg></a></td>
                        </tr>    
                        <?php }?>                                                      
                      </tbody>
                    </table>
                  </div>
                  </div>
                </div>
              </div>              
            </div>
          </div>
        </div></div>    
<div class="body flex-grow-1 px-3">
        <div class="container-lg">
          <div class="fs-2 fw-semibold">Thêm Mấu</div>         
          <div class="card mb-4">
             <div class="card-body">
              <div class="example">
                <ul class="nav nav-underline" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-429" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="/duongcodes/free.svg#cil-media-play"></use>
                      </svg>Thêm Mẫu</a></li>                  
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-429">
                    <div class="table-responsive">
                    <div class="card email-app">
            <div class="card-body">
              <form method="POST">
                <div class="row mb-3">
                  <label class="col-2 col-sm-1 col-form-label" for="linkanh">Link ảnh:</label>
                  <div class="col-10 col-sm-11">
                    <input class="form-control" name="linkanh" type="text" placeholder="Link ảnh">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-2 col-sm-1 col-form-label" for="amount">Giá tiền:</label>
                  <div class="col-10 col-sm-11">
                    <input class="form-control" name="amount" type="number" placeholder="Giá tiền">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-2 col-sm-1 col-form-label" for="product">Product:</label>
                  <div class="col-10 col-sm-11">
                    <input class="form-control" name="product" type="text" placeholder="ĐỂ xác định mẫu khách tạo ví dụ : logofifai">
                  </div>
                </div>
                <div class="row">
                <div class="col-sm-11 ms-auto">              
                  <div class="mb-3">
                    <button class="btn btn-success" type="submit" name="submit">Tạo</button>
                  </div>
                </div>
              </div>
              </form>              
            </div>
          </div>
                  </div>
                  </div>
                </div>
              </div>              
            </div>
          </div>
        </div>
      </div>   
<div class="body flex-grow-1 px-3">
        <div class="container-lg">
          <div class="fs-2 fw-semibold">Danh Sách Mẫu</div>         
          <div class="card mb-4">
             <div class="card-body">
              <div class="example">
                <ul class="nav nav-underline" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-429" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="/duongcodes/free.svg#cil-media-play"></use>
                      </svg>Xem</a></li>                  
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-429">
                    <div class="table-responsive">
                    <table class="table table-striped border datatable">
                      <thead>
                        <tr>
                          <th>ẢNH</th>
                          <th>GIÁ TIỀN</th>
                          <th>PRODUCT</th>                           
                          <th>TÙY CHỈNH</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        $sql = "SELECT * FROM maulogo";
                        $result = $conn->query($sql);
                        while($row = $result->fetch(PDO::FETCH_ASSOC)) {
                        ?>
                        <tr class="align-middle">
                          <td><img src="<?=$row['img']?>"></td>
                          <td><?=number_format($row['cash'])?> VNĐ</td>
                          <td><?=$row['product']?></td>                          
                          <td><a class="btn btn-info" href="?deletemau=true&id=<?=$row['id']?>">
                              <svg class="icon">
                                <use xlink:href="/duongcodes/free.svg#cil-trash"></use>
                              </svg></a></td>
                        </tr>    
                        <?php }?>                                                      
                      </tbody>
                    </table>
                  </div>
                  </div>
                </div>
              </div>              
            </div>
          </div>
        </div>
      </div>    


<!--<div class="body flex-grow-1 px-3">
        <div class="container-lg">
          <div class="fs-2 fw-semibold">Cài Đặt Website</div>         
          <div class="card mb-4">
             <div class="card-body">
              <div class="example">               
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-429">
                    <div class="table-responsive">
                    <div class="card email-app">
            <div class="card-body">
              <form>
                <div class="row mb-3">
                  <label class="col-2 col-sm-1 col-form-label" for="nameweb">Tên website:</label>
                  <div class="col-10 col-sm-11">
                    <input class="form-control" name="nameweb" type="text" placeholder="Tên website" value="">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-2 col-sm-1 col-form-label" for="amount">Giá tiền:</label>
                  <div class="col-10 col-sm-11">
                    <input class="form-control" name="amount" type="number" placeholder="Giá tiền">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-2 col-sm-1 col-form-label" for="product">Product:</label>
                  <div class="col-10 col-sm-11">
                    <input class="form-control" name="product" type="text" placeholder="ĐỂ xác định mẫu khách tạo ví dụ : logofifai">
                  </div>
                </div>
              </form>
              <div class="row">
                <div class="col-sm-11 ms-auto">              
                  <div class="mb-3">
                    <button class="btn btn-success" type="submit">Tạo</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
                  </div>
                  </div>
                </div>
              </div>              
            </div>
          </div>
        </div>
      </div>  
-->


    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="/duongcodes/js/coreui.bundle.min.js"></script>
    <script src="/duongcodes/js/simplebar.min.js"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="/duongcodes/js/jquery.min.js"></script>
    <script src="/duongcodes/js/jquery.dataTables.js"></script>
    <script src="/duongcodes/js/dataTables.bootstrap4.min.js"></script>
    <script src="/duongcodes/js/datatables.js"></script>
    <script>
    </script>

  </body>
</html>