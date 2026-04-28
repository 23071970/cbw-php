<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="moinsen.php?name=stefan&nachname=tissot" method="post">

        name: <input name="name" type="text"><br>
        email: <input name="email" type="text"><br>
        Zahl1: <input type="text" name="zahl1"><br>
        Zahl2: <input type="text" name="zahl2"><br>


        Range: <span id="ro">0</span> <br>
        <input id="range" name="range" type="range" min="0" max="10"><br>

        <select name="select">
            <option value="1">option 1</option>
            <option value="2">option 2</option>
            <option value="3">option 3</option>
            <option value="4">option 4</option>
        </select>


        <br>
        <br>
        <select multiple name="select2[]">
            <option value="1">option 1</option>
            <option value="2">option 2</option>
            <option value="3">option 3</option>
            <option value="4">option 4</option>
            <option value="5">option 5</option>
            <option value="6">option 6</option>
            <option value="7">option 7</option>
        </select><br>


        Farbe:<br>
        <input type="color" name="color"><br>

        Date:<br>
        <input type="date" name="date" id=""><br>

        time:<br>
        <input type="time" name="time"><br>


        <br>
        <input type="submit" value="senden">

    </form>

    <script>
        const range = document.getElementById('range');
        const ro = document.getElementById('ro');
        range.addEventListener('input', () => {
            //console.log(range.value);
            ro.innerText = range.value;
        })
    </script>



</body>

</html>