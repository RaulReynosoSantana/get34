<?php
// Descripciones de los signos del zodiaco
$horoscopos = [
  'Aries' => 'Eres valiente, enérgico y aventurero.',
  'Tauro' => 'Eres firme, fiable y tienes un gran amor por la belleza.',
  'Geminis' => 'Eres flexible, inteligente y con una mente rápida.',
  'Cancer' => 'Eres emocional, empático y altamente imaginativo.',
  'Leo' => 'Eres dominante, extrovertido y creativo.',
  'Virgo' => 'Eres meticuloso, inteligente y práctico.',
  'Libra' => 'Eres encantador, idealista y sociable.',
  'Escorpio' => 'Eres apasionado, asertivo y determinado.',
  'Sagitario' => 'Eres generoso, idealista y tienes un gran sentido del humor.',
  'Capricornio' => 'Eres serio, disciplinado y autónomo.',
  'Acuario' => 'Eres original, independiente y humanitario.',
  'Piscis' => 'Eres compasivo, intuitivo y sabio.',
];

$nombre = '';
$horoscopo = '';
$descripcion = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nombre = $_POST['nombre'];
  $horoscopo = $_POST['horoscopo'];
  $descripcion = $horoscopos[$horoscopo];
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Horóscopo</title>
    <style>
    body {
        background: rgb(87, 38, 142);
        background: linear-gradient(90deg, rgba(87, 38, 142, 1) 0%, rgba(130, 29, 253, 1) 50%, rgba(161, 69, 252, 1) 100%);
        display: flex;
        justify-content: space-around;
        align-items: center;
        height: 100vh;
        margin: 0;
        padding: 20px;
        color: white;
        font-family: Arial, sans-serif;
    }

    .container {
        background: rgba(0, 0, 0, 0.6);
        padding: 20px;
        border-radius: 15px;
        box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
        width: 90%;
        max-width: 400px;
    }

    .horoscopo-container {
        display: grid;
        gap: 20px;
    }

    label,
    h2,
    p {
        margin: 5px 0;
    }

    input,
    select {
        padding: 10px;
        border: none;
        border-radius: 5px;
        background: rgba(255, 255, 255, 0.1);
        color: black;
    }

    button {
        border: none;
        padding: 10px;
        color: white;
        background: linear-gradient(135deg, #6d4dd8 0%, #8b60ed 100%);
        cursor: pointer;
        border-radius: 5px;
        box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
    }

    button:hover {
        background: linear-gradient(-45deg, #6d4dd8 0%, #8b60ed 100%);
    }

    .resultado-horoscopo {
        background: rgba(0, 0, 0, 0.6);
        padding: 20px;
        border-radius: 15px;
        box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
        width: 90%;
        max-width: 400px;
        margin-top: 20px;
    }
    </style>
</head>

<body>
    <div class="container">
        <form method="POST" class="horoscopo-container">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="<?= htmlspecialchars($nombre) ?>">
            <label for="horoscopo">Horóscopo:</label>
            <select id="horoscopo" name="horoscopo">
                <?php foreach ($horoscopos as $signo => $desc): ?>
                <option value="<?= $signo ?>" <?= $horoscopo === $signo ? 'selected' : '' ?>>
                    <?= $signo ?>
                </option>
                <?php endforeach; ?>
            </select>
            <button type="submit">Enviar</button>
        </form>
    </div>

    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
    <div class="resultado-horoscopo">
        <h2>Hola <?= htmlspecialchars($nombre) ?>, esto dice tu horóscopo:</h2>
        <p><?= htmlspecialchars($descripcion) ?></p>
    </div>
    <?php endif; ?>
</body>

</html>