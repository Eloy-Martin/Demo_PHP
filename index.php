<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>MAIN VIEW</title>
</head>
<body>
    <h1>Hello World</h1>
    <form  method="post" action="script.php">
        <div>
            <button id="button1">This is an Alert</button>
        </div>
        <div>
            <button id="button2">This is a PHP Script</button>
        </div>
        <div>
            <button id="button3">This is a Get API call</button> <button id = "button3reset">Reset</button>
            <p id="response">Hello...</p>
        </div>
        <div>
            <button id="button4">This is a Post API call (+1)</button>
            <counter id="counter">0</counter>
        </div>
        <div>
            <input id="input1">What is your name?</input><button id="submit1">Submit</button>
            <p id="personalGreeting"></p>
        </div>
    </form>

</body>
</html>