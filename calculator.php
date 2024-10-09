<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="card">
        <h2>KALKULATOR</h2>
        <form method="POST" action="calculator.php">
            <input type="number" name="num1" placeholder="Masukkan angka pertama" required>
            <input type="number" name="num2" placeholder="Masukkan angka kedua" required>
            
            <div class="row">
                <select name="operation">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                </select>
                <button type="submit" class="btn-hitung">Hitung</button>
            </div>

            <div class="result">
                <?php
                if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operation'])) {
                    $num1 = $_POST['num1'];
                    $num2 = $_POST['num2'];
                    $operation = $_POST['operation'];
                    $result = 0;

                    switch ($operation) {
                        case '+':
                            $result = $num1 + $num2;
                            break;
                        case '-':
                            $result = $num1 - $num2;
                            break;
                        case '*':
                            $result = $num1 * $num2;
                            break;
                        case '/':
                            if ($num2 != 0) {
                                $result = $num1 / $num2;
                            } else {
                                echo "<p>Kesalahan: Pembagian dengan nol tidak diperbolehkan.</p>";
                            }
                            break;
                    }

                    if ($operation !== '/' || $num2 != 0) {
                        echo "<p>Hasil: $result</p>";
                    }
                }
                ?>
            </div>
        </form>
    </div>
</body>
</html>
