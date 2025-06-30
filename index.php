<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>MAIN VIEW</title>
</head>
<body>
    <h1>Hello World</h1>

    <!-- example of CRUD-->
    <!-- Create-->
    <form  method="post" action="CRUD/create.php">
        <input type="text" name="enter_name" placeholder="Enter name" />
        <input type="text" name="enter_age" placeholder="Enter age" />
        <button type="submit" name="create">Create</button>
    </form>

    <!-- Read-->
    <?php
        session_start();
        require_once 'CRUD/db.php';
        $stmt  = $pdo->query('SELECT id, name FROM people ORDER BY name');
        $persons = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <form method="post" action="CRUD/read.php">
        <label for="person">Select a name to consult age</label>
        <select id="person" name="choose_person">
            <?php foreach ($persons as $p): ?>
                <option value="<?= $p['id'] ?>">
                    <?= htmlspecialchars($p['name']) ?>
                </option>
            <?php endforeach; ?>
        </select>
        <button type="submit" name="consult">Consult</button>
        </form>        
    <p>Here the result of your query:</p>
    <?php
        if (isset($_SESSION['consult_msg'])) {
            echo '<p>' . htmlspecialchars($_SESSION['consult_msg']) . '</p>';
            unset($_SESSION['consult_msg']);
        }
    ?>
    <!-- Update-->
    <form method="post" action="CRUD/update.php">
        <input type="text" name="input1" placeholder="Enter something" />
        <button type="submit" name="button1">Submit</button>

        <br/>
    </form>

    <!-- Delete-->
    <form method="post" action="CRUD/delete.php">
        <input type="text" name="input1" placeholder="Enter something" />
        <button type="submit" name="button1">Submit</button>
    </form>

</body>
</html>