<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>MAIN VIEW</title>
</head>
<body>
    <h1>Hello World</h1>
    <form  method="post" action="CRUD/create.php">
        <!-- example of CRUD-->
        <!-- Create-->
        <input type="text" name="enter_name" placeholder="Enter name" />
        <input type="text" name="enter_age" placeholder="Enter age" />
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