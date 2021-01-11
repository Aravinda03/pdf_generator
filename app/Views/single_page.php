<!doctype html>
<html lang="en">
<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Single Page View</title>
</head>
<body>
<div class="container-fluid">

        <div class="row card">
            <div class="col-md-3">
            <img src="/assets/images/<?= $row['image'];?>" class="card-img-top">
            </div>
            <div class="card-body col-md-9">

                <h1 class="card-title"><?= $row['name'] ?></h1>
                <p><?= $row['email'] ?></p>
                <p><?= $row['contact'] ?></p>

                <a href="/pdfcontroller/htmltopdf/<?= $row['id']; ?>" class="btn btn-primary">Download PDF</a>
            </div>
        </div>

</div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>