<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../public/style.css">
    <title>Trang chủ</title>
</head>

<body>
    <div class="title">
        <h1 class="h1-title">Các mặt hàng đang có</h1>
        <form class="add-form" method="GET">
            <button type="submit" name="action" value="add" class="btn btn-success"> + Thêm mới sách</button></td>
        </form>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên sách</th>
                <th scope="col">Danh mục</th>
                <th scope="col">Thông tin</th>
                <td scope>Action</td>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 1;
            foreach ($books as $book) {
            ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $book->getBookName(); ?></td>
                    <td><?php echo $book->getCategoryID(); ?></td>
                    <td><?php echo $book->getBookDesc(); ?></td>
                    <td>
                        <a href="index.php?action=delete&id=<?php echo $book->getBookID(); ?>"><i class="fa-solid fa-trash"></i></a>
                        <a href="index.php?action=edit&id=<?php echo $book->getBookID(); ?>"><i class="fa-solid fa-pen"></i></a>
                        <a href=""><i class="fa-solid fa-eye"></i></a>
                    </td>
                </tr>
            <?php
                $i++;
            }
            ?>
        </tbody>
    </table>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</html>