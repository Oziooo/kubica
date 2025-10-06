<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <title>Jednoduchá kalkulačka</title>
</head>
<body>
    <h2>Jednoduchá kalkulačka</h2>

    <form method="post">
        <input type="number" step="any" name="cislo1" placeholder="Prvé číslo" required>
        <select name="operacia">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="number" step="any" name="cislo2" placeholder="Druhé číslo" required>
        <button type="submit" name="vypocitaj">Vypočítaj</button>
    </form>

    <?php
    if (isset($_POST['vypocitaj'])) {
        $cislo1 = $_POST['cislo1'];
        $cislo2 = $_POST['cislo2'];
        $operacia = $_POST['operacia'];

        switch ($operacia) {
            case '+':
                $vysledok = $cislo1 + $cislo2;
                break;
            case '-':
                $vysledok = $cislo1 - $cislo2;
                break;
            case '*':
                $vysledok = $cislo1 * $cislo2;
                break;
            case '/':
                if ($cislo2 == 0) {
                    echo "<p style='color:red;'>Chyba: Delenie nulou nie je možné.</p>";
                    exit;
                } else {
                    $vysledok = $cislo1 / $cislo2;
                }
                break;
            default:
                echo "<p style='color:red;'>Neznáma operácia.</p>";
                exit;
        }

        echo "<h3>Výsledok: $cislo1 $operacia $cislo2 = $vysledok</h3>";
    }
    ?>
</body>
</html>
