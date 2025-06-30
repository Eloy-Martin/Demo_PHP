<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>MAIN VIEW</title>
</head>
<body>
    <?php
    include 'CRUD/db.php';
    include 'CRUD/create.php';
    include 'CRUD/read.php';
    include 'CRUD/update.php';
    include 'CRUD/delete.php';
    ?>
    <h1>Hello World</h1>
    <form  method="post" action="CRUD/create.php">
    <!-- example of CRUD-->
    <!-- Create-->
    <input type="text" name="name" placeholder="Enter name" />
    <input type="text" name="age" placeholder="Enter age" />
    <button type="submit" name="create">Create</button>
    <br/>

    <!-- Read-->
    <label>Select a name to consult age</label>
    <select name="name">
        <option value="name1">Name 1</option>
        <option value="name2">Name 2</option>
        <option value="name3">Name 3</option>
    </select>
    <br/>

    <!-- Update-->
    <input type="text" name="input1" placeholder="Enter something" />
    <button type="submit" name="button1">Submit</button>

    <br/>

    <!-- Delete-->
    <input type="text" name="input1" placeholder="Enter something" />
    <button type="submit" name="button1">Submit</button>


    </form>

</body>
</html>