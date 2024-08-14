<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


</head>

<body>
    
<main>
    <form action= "includes/formhandler.php" method="post">
        <label for="firstname">firstname</label>
        <label id="firstname" type="text" name="firstname" placeholder="firstname>

        <label for="lastname">lastname</label>
        <label id="lastname" type="text" name="lastname" placeholder="lastname>

        <label for="gender">gender ?</label>
        <select id="gender"name="gender">
            <option value="none">none</option>
            <option value="male">male</option>
            <option value="female">female</option>
            
        </select>
        <button type="submit">submit</button>
    </form>
</body>
</html>