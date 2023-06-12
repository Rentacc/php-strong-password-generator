<?php
    // Controlla se è stata inviata una richiesta GET per la lunghezza della password
    if(isset($_GET['length'])) {
        // Ottieni la lunghezza della password dal parametro GET
        $passwordLength = $_GET['length'];

        // Definisci i caratteri possibili per la password
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+-=[]{}|<>';

        // Calcola la lunghezza del set di caratteri
        $charactersLength = strlen($characters);

        // Inizializza la password
        $generatedPassword = '';

        // Genera la password casuale
        for ($i = 0; $i < $passwordLength; $i++) {
            // Aggiungi un carattere casuale dalla stringa dei caratteri possibili
            $generatedPassword .= $characters[random_int(0, $charactersLength - 1)];
        }
    }
?>




<!DOCTYPE html>
<html>
<head>
    <title>PHP Strong Password Generator</title>
</head>
<body>
    <h1>PHP Strong Password Generator</h1>
    <form action="" method="GET">
        <label for="length">Lunghezza password:</label>
        <input type="number" id="length" name="length" min="1" max="100" required>
        <button type="submit">Genera password</button>
    </form>

    <?php if(isset($generatedPassword)): ?>
        <h2>Password generata: <?php echo $generatedPassword; ?></h2>
    <?php endif; ?>
</body>
</html>
