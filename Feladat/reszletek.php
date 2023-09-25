<!DOCTYPE html>
<html lang="hu">
<head>
    <?php include 'head.php'; ?>
</head>
<body>
    <?php include 'menu.php'; ?>
    <div class="container mt-5">
        <h1>Részletek</h1>
        <?php
        if (isset($_GET['auto'])) {
            $auto = json_decode(urldecode($_GET['auto']));
            echo '
            <div class="card">
                <img src="images/' . $auto[3] . '" class="card-img-top" alt="' . $auto[0] . ' ' . $auto[1] . '" width="500" height="auto">
                <div class="card-body">
                    <h5 class="card-title">' . $auto[0] . ' ' . $auto[1] . '</h5>
                    <p class="card-text">Ár: ' . $auto[2] . ' Ft</p>
                    <p>' . getAutokLeiras($auto[0]) . '</p>
                </div>
            </div>';
        } else {
            echo '<p>Nincs választott autó.</p>';
        }
        function getAutokLeiras($autoMarka) {
            switch ($autoMarka) {
                case 'Audi A6':
                    return "Laposabb, szélesebb, alacsonyabb - az új A6 Avant orrkialakítása már az első pillantásra erőt és tekintélyt sugároz...";
                case 'Audi A7':
                    return "Félreérthetetlen és semmi mással össze nem téveszthető - az Audi A7 Sportback. Egyedi fénygrafika jellemezte...";
                case 'Audi A8':
                    return "Az utastérben olyan anyagokkal és precíz kidolgozással találkozhat, amelyekről jól érzékelhető az igényes és színvonalas karakter...";
                case 'Audi Q8':
                    return "Az új Szahír-arany metál szín a Fekete optikai csomag plusz összeállítással együtt jól kiemeli az atletikus és elegáns stílus e tökéletes kombinációját...";
                case 'Audi RSQ8':
                    return "Az Audi Sport legerősebb SUV-Coupé modellje: a 441 kW (600 LE) teljesítményű Audi RS Q8, amely RS-menetteljesítményei mellett kiemelkedő alkalmazkodóképességével is meggyőzőnek bizonyul - vezetési élménye és dizájnja tekintetében egyaránt...";
                default:
                    return "";
            }
        }
        ?>
    </div>
</body>
</html>
