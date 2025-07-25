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
<hr/>
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
<hr/>
    <!-- Update-->
    <?php
        require_once 'CRUD/db.php';
        $stmt  = $pdo->query('SELECT id, name FROM people ORDER BY name');
        $persons = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <form method="post" action="CRUD/update.php">
        <label for="person_update">Select a name to update name and age</label>
        <select id="person_update" name="choose_person_update">
            <?php foreach ($persons as $p): ?>
                <option value="<?= $p['id'] ?>">
                    <?= htmlspecialchars($p['name']) ?>
                </option>
            <?php endforeach; ?>
        </select>
        <br/>
        <input type="text" name="update_name" placeholder="Update name" />
        <input type="text" name="update_age" placeholder="Update age" />
        <button type="submit" name="update">Update</button>
    </form>
<hr/>

    <!-- Delete-->
    <?php
        require_once 'CRUD/db.php';
        $stmt  = $pdo->query('SELECT id, name FROM people ORDER BY name');
        $persons = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <form method="post" action="CRUD/delete.php">
        <label for="person_delete">Select a name to delete it</label>
        <select id="person_delete" name="choose_person_delete">
            <?php foreach ($persons as $p): ?>
                <option value="<?= $p['id'] ?>">
                    <?= htmlspecialchars($p['name']) ?>
                </option>
            <?php endforeach; ?>
        </select>
        <button type="submit" name="delete">Delete</button>
    </form>

</body>
</html>