<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="form_result.php" method="POST">
        <div>
            <label for="name">Name</label>
            <input type="text" id="name" , name="name">
        </div>
        <label for="topics">Topics</1abe1>
            <select id="topics" name="topics">
                <option value="Idioms">Idioms</option>
                <option value="Math">Math</option>
                <option value="Science">Science</option>
            </select>
            <br><br>
            <label>
                <input type="checkbox" value="Apple" id="opt-1" name="fruits"> Apple
                <input type="checkbox" value="Banana" id="opt-2" name="fruits"> Banana
                <input type="checkbox" value="Watermelon" id="opt-3" name="fruits"> Watermelon
            </label>
            <br><br><br>
            <button type="submit">Send</button>
    </form>
</body>

</html>