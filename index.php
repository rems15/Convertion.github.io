<!DOCTYPE html>
<html>
<head>
    <title>Decimal Converter</title>
    <link rel="stylesheet" type="text/css" href="convert.css" />
</head>
<body>
    <div class="container">
        <h2>Decimal Converter</h2>
        <form method="POST" action="">
            <label for="decimal">Decimal Number:</label>
            <input type="text" id="decimal" name="decimal" required>

            <button type="submit">Convert</button>
        </form>

        <?php
        if (isset($_POST['decimal'])) {
            $decimal = $_POST['decimal'];

            // Validate if input is numeric
            if (!is_numeric($decimal)) {
                echo '<div class="error">Please input a valid decimal number.</div>';
            } else {
                // Convert decimal to binary
                $binary = decbin($decimal);

                // Convert decimal to octal
                $octal = decoct($decimal);

                // Convert decimal to hexadecimal
                $hexadecimal = dechex($decimal);

                echo '<div class="result">';
                echo '<strong>Binary:</strong> ' . $binary . '<br>';
                echo '<strong>Octal:</strong> ' . $octal . '<br>';
                echo '<strong>Hexadecimal:</strong> ' . $hexadecimal . '<br>';
                echo '</div>';
            }
        }
        ?>
    </div>
</body>
</html>
