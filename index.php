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
        <lable for="firstname">firstname</lable>
        <lable id="firstname" type="text" name="firstname" placeholder="firstname>

        <lable for="lastname">lastname</lable>
        <lable id="lastname" type="text" name="lastname" placeholder="lastname>

        <lable for="gender">gender ?</lable>
        <select id="gender"name="gender">
            <option value="none">none</option>
            <option value="male">male</option>
            <option value="female">female</option>
            
        </select>
        <button type="submit">submit</button>
    </form>
</body>
</html>