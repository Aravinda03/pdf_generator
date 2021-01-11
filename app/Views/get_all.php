<!doctype html>
<html lang="en">
<head>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Data</title>
</head>
<body>

<div class="container-fluid">



    <div class="welcome padding jumbotron display-1 d-flex justify-content-center">
        <?= $title ?>
    </div>

    <div class="row">&nbsp;</div>

    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Contact</th>
                <td>&nbsp;</td>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($table as $t): ?>
                <tr>
                    <td><?= $t['name']; ?></td>
                    <td><?= $t['email']; ?></td>
                    <td><?= $t['contact']; ?></td>
                    <td><a class="btn  btn-sm btn-outline-primary rounded-pill" href="/pdfcontroller/viewSinglePage/<?= $t['id']; ?>">View</a></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>
