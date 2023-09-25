<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Eladó autók</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Eladó autók</h1>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
            <?php
            $autok = array(
                array("Audi", "A6", "21.000.000 Ft", "A6.jpg"),
                array("Audi", "A7", "24.000.000 Ft", "A7.jpg"),
                array("Audi", "A8", "36.000.000 Ft", "A8.jpg"),
                array("Audi", "Q8", "32.000.000 Ft", "Q8.jpg"),
                array("Audi", "RSQ8", "54.000.000 Ft", "RSQ8.jpg")
            );

            foreach ($autok as $auto) {
                echo '
                <div class="col mb-4">
                    <div class="card h-100">
                        <img src="images/' . $auto[3] . '" class="card-img-top" alt="' . $auto[0] . ' ' . $auto[1] . '" width="500" height="auto">
                        <div class="card-body">
                            <h5 class="card-title">' . $auto[0] . ' ' . $auto[1] . '</h5>
                            <p class="card-text">Ár: ' . $auto[2] . ' Ft</p>
                            <a href="reszletek.php?auto=' . urlencode(json_encode($auto)) . '" class="btn btn-primary">Részletek</a>
                        </div>
                    </div>
                </div>';
            }
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
