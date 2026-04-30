<?php

$datei = 'dummy.txt';


//Read function laden daten
function ladeDaten(string $datei): array
{
    if (file_exists($datei)) {
        $content = file_get_contents($datei);
        $daten = unserialize($content);

        return is_array($daten) ? $daten : [];
    }
    return [];
}

//wird für insert update und delete gebraucht
function speichereDaten(string $datei, array $daten): void
{
    file_put_contents($datei, serialize($daten));
}


//wird für insert und update gebraucht
function isInputNotEmpty(array $input): bool
{
    return !empty($input['vorname']) &&
        !empty($input['nachname']) &&
        !empty($input['telefon']);
}


//CRUD

//create
function insertDatensatz(array $daten, array $post): array
{
    $id = empty($daten) ? 1 : max(array_keys($daten)) + 1;

    $daten[$id] = [
        'vorname' => $post['vorname'],
        'nachname' => $post['nachname'],
        'telefon' => $post['telefon']
    ];

    return $daten;
}

//delete
function loescheDatensatz(array $daten, int $id): array
{
    if (isset($daten[$id])) {
        unset($daten[$id]);
    }

    return $daten;
}

//damit sie anschließend im formular erscheinen
function holeDatensatz(array $daten, int $id): array|Null
{
    return $daten[$id] ?? null;
}

//update
function updateDatensatz(array $daten, int $id, array $post): array
{
    if (isset($daten[$id])) {
        $daten[$id] = [
            'vorname' => $post['vorname'],
            'nachname' => $post['nachname'],
            'telefon' => $post['telefon']
        ];
    }

    return $daten;
}

//start hier
$daten = ladeDaten($datei);

// formular default
$bearbeitenId = '';
$vorname = '';
$nachname = '';
$telefon = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $action = $_POST['action'] ?? null;
    $id = $_POST['id'] ?? null;

    switch ($action) {

        case 'Insert':
            if (isInputNotEmpty($_POST)) {
                $daten = insertDatensatz($daten, $_POST);
                speichereDaten($datei, $daten);
            }
            break;

        case 'Löschen':
            if ($id !== null) {
                $daten = loescheDatensatz($daten, $id);
                speichereDaten($datei, $daten);
            }
            break;

        case 'Bearbeiten':
            if ($id !== null) {
                $eintrag = holeDatensatz($daten, $id);

                if ($eintrag) {
                    $bearbeitenId = $id;
                    $vorname = $eintrag['vorname'];
                    $nachname = $eintrag['nachname'];
                    $telefon = $eintrag['telefon'];
                }
            }
            break;

        case 'Update':
            if ($id !== null && isInputNotEmpty($_POST)) {
                $daten = updateDatensatz($daten, $id, $_POST);
                speichereDaten($datei, $daten);

                // formular reset
                $bearbeitenId = '';
                $vorname = '';
                $nachname = '';
                $telefon = '';
            }
            break;
    }
}

?>


<!-- formular -->
<form method="post">
    <input type="hidden" name="id" value="<?= htmlspecialchars($bearbeitenId); ?>">

    <input type="text" name="vorname" placeholder="Vorname" value="<?= htmlspecialchars($vorname); ?>"><br>
    <input type="text" name="nachname" placeholder="Nachname" value="<?= htmlspecialchars($nachname); ?>"><br>
    <input type="text" name="telefon" placeholder="Telefon" value="<?= htmlspecialchars($telefon); ?>"><br>

    <?php if ($bearbeitenId !== '') { ?>
        <input type="submit" name="action" value="Update">
    <?php } else { ?>
        <input type="submit" name="action" value="Insert">
    <?php } ?>
</form>

<br>


<!-- Tabelle-->
<table border="1">
    <tr>
        <th>ID</th>
        <th>Vorname</th>
        <th>Nachname</th>
        <th>Telefon</th>
        <th>Aktion</th>
    </tr>

    <?php foreach ($daten as $key => $data) { ?>
        <tr>
            <td><?= htmlspecialchars($key); ?></td>
            <td><?= htmlspecialchars($data['vorname']); ?></td>
            <td><?= htmlspecialchars($data['nachname']); ?></td>
            <td><?= htmlspecialchars($data['telefon']); ?></td>
            <td>
                <form method="post" style="display:inline;">
                    <input type="hidden" name="id" value="<?= htmlspecialchars($key); ?>">
                    <input type="submit" name="action" value="Bearbeiten">
                </form>

                <form method="post" style="display:inline;">
                    <input type="hidden" name="id" value="<?= htmlspecialchars($key); ?>">
                    <input type="submit" name="action" value="Löschen">
                </form>
            </td>
        </tr>
    <?php } ?>
</table>