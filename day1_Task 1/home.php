<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <fieldset>
    <legend > Regestration Form </legend>
        <form class="form" action="data.php" method="post">
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="fname"/>
            <br>
    
            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lname"/>
            <br>
    
            <label for="address"> Address</label>
            <textarea cols="15" rows="10"></textarea>
            <br>

            <label>Country:
                <select name="country">
                    <option>Select Country</option>
                    <option>EGYPT</option>
                    <option>London</option>
                    <option>Canda</option>
                    <option>Germany</option>
                </select>
            </label>
            <br>
            <label>Gender:</label>
            <input type="radio" name="gender" value="male" class="inline"> Male
            <input type="radio" name="gender" value="female" > Female
            <br>
            <label>Skills:</label>
            <input type="checkbox" name="skill1" value="php" class="inline"> PHP
            <input type="checkbox" name="skill2" value="mysql" class="inline" > MySQL
            <input type="checkbox" name="skill3" value="j2se" class="inline" > Jason
            <input type="checkbox" name="skill4" value="postgresql" class="inline"> PostgreSQL
            <br>

            <label for="username">User Name</label>
            <input type="text" id="username" name="username"/>
            <br>

            <label for="password">Password</label>
            <input type="password" id="password" name="password"/>
            <br>

            <label for="department">Department</label>
            <input type="text" id="department" name="department" placeholder="Open Source"/>
            <br>
            <p>DI129*</p>
        <label>Please Insert the code above:
            <input type="text" name="captcha">
        </label>
        <br>

        <button class="submit" type="submit">Submit</button>
        <button class="reset" type="reset">Reset</button>

    
        </form>
    

</fieldset>
    
</body>
</html>