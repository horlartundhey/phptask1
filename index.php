<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Paaji+2:wght@500&display=swap"
    rel="stylesheet">
</head>
<body>
<div class="row">
        <h2 class="col mid2">Welcome to Qyubie</h2>
        <h4 class="mid">Please fill in the form to Contact us!!</h4>    
        <div class="centre">
            <form action="process.php" method="POST">
                <label class="label">
                    <b>
                        First Name
                    </b>
                </label>
                <input type="text" class="input inputbtn" name="firstname" value required autocomplete="off">
                <br>
                <br>
                <label class="label">
                    <b>
                        Last Name
                    </b>
                </label>
                <input type="text" class="input inputbtn" name="lastname" value required autocomplete="off">
                <br>
                <br>

                <label class="label">
                    <b>
                        Valid Email
                    </b>
                </label>
                <input type="email" class="input inputbtn" name="email" value required autocomplete="off">
                <br>
                <br>     
                
                <label class="label">
                    <b>
                        Type in Your Message!!
                    </b>
                    <textarea name="textme" class="tab"> </textarea>
                </label>

                <div>
                    <button type="submit"  name="submit" class="btn btnsiz">Send Message</button>
                </div>                
            </form>
        </div>
    </div>

</body>
</html>