<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="card mb-3">
    <img class="card-img-top" src="/Case/img/sach5.png" alt="Card image cap">
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="index1.php">
                <img src="/Case/img/logo2.png" width="80" height="80" alt="">
            </a>
        </nav>
    </a>
    <nav class="navbar navbar-light bg-light">
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </nav>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="header-breadcrumbs background-menu-homepage" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="index1.php?page=list">
                    <ion-icon name="notifications-outline"></ion-icon>
                    Book <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index1.php?page=view-customer">Customer</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index1.php?page=view-order">Order</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="#">login</a>
            </li>
        </ul>
    </div>
</nav>
<div >
    <a class="btn btn-success" href="index1.php?page=add">ADD</a>

    <table class="table" style="margin-top: 1rem;padding: 8px;border: 2px solid;border-radius: 10px;overflow: hidden;border-top: 1px solid">
        <thead class="thead-dark">
        <tr>
            <th scope="col">BOOK ID</th>
            <th scope="col">BOOK NAME</th>
            <th scope="col">QUANTITY</th>
            <th scope="col">UNIT PRICE</th>
            <th scope="col">AUTHOR</th>
            <th scope="col">CATEGORY</th>
            <th scope="col">IMAGE</th>
            <th scope="col" colspan="2">ACTION</th>
        </tr>
        </thead>
        <?php foreach ($books as $key => $book): ?>
            <tr>
                <td class="table-active"><?php echo ++$key ?></td>
                <td class="table-primary"><?php echo $book->getBookName() ?></td>
                <td class="table-secondary"><?php echo $book->getQuantity() ?></td>
                <td class="table-success"><?php echo $book->getUnitPrice() ?></td>
                <td class="table-danger"><?php echo $book->getAuthor() ?></td>
                <td class="table-warning"><?php echo $book->getCategoryId() ?></td>
                <td><img style="height: 100px;width: 100px" src="<?php echo $book->getImage() ?>"></td>
                <td class="table-info">
                    <a class="btn btn-success" href="index1.php?page=edit&id=<?php echo $book->getBookId() ?>"><svg width="25px" height="25px" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                        </svg></a>
                </td>
                <td class="table-info">
                    <a class="btn btn-danger"
                       href="index1.php?page=delete&id=<?php echo $book->getBookId() ?>"><svg width="25px" height="25px" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                        </svg></a>
                </td>
            </tr>
        <?php endforeach; ?>

    </table>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>