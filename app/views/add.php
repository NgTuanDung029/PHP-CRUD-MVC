<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Thêm mới sách</title>
</head>

<body>
    <div>
        <h3>Thêm sách</h3>
        <form action="" method="POST">
            <div class="mb-2">
                <label>Tên sách</label>
                <input type="text" name="bookName" class="form-control" />
            </div>
            <div class="mb-2">
                <label>Danh mục</label>
                <!-- <input type="text" name="categoryID" class="form-control" /> -->
                <select name="categoryID" id="lang-select">
                    <option value="1">Nguyễn Nhật Ánh</option>
                    <option value="2">Trần Đăng Khoa</option>
                </select>
            </div>
            <div class="mb2">
                <label>Mô tả: </label>
                <input type="text" name="bookDesc" class="form-control" />
                <!-- <input type="checkbox" name='bookDesc' value="Nam">Nam
                <input type="checkbox" name='bookDesc' value="Nữ">Nữ -->
                <!-- <input type="date" name="bookDesc"> -->
            </div>
            <button class="btn btn-primary" type="submit" name="add">Thêm</button></td>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</html>