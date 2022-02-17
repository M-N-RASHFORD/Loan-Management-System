<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>..loginpage</title>
        <style media="screen">
            body{
                box-sizing: border-box;
                padding: 20px;
                margin: 0;
                display: flex;
                justify-content: center;
                font-family: century gothic;
            }
            .center{
                border: 0;
                border-bottom: 1px solid #000;
                border-top: 1px solid #000;
                width: 50%;
                padding: 20px;
                margin: 30px;
                border-radius: 10px;
                align-items: stretch;
                flex-wrap: nowrap;
            }
            form{
                display: flex;
                flex-direction: column;
                padding: 10px;
                margin: 20px;
                transform: translateX(10vh);
            }
            input{
                border: 0;
                border-bottom: 1px solid #000;
                padding: 7px;
                margin: 5px;
                background-color: #fff;
                outline: 0;
                width: 100%;
                font-family: century gothic;
            }
            input[type="submit"]{
                background-color: #000;
                width: 110%;
                color: #fff;
            }
        </style>
    </head>
    <body>
        <div class="center">
            <div style="display: flex; flex-direction: row;">
                <div style="display: flex; flex-direction: column;">
                    <h1>Welcome Admin</h1>
                    <p>please login to continue...</p>
                </div>
                <form action="Home.php">
                    <input type="text" name="username" placeholder="Username" required/>
                    <input type="password" name="password" placeholder="Password" required/>
                    <input type="submit" value="Login"/>
                </form>
            </div>
        </div>
    </body>
</html>
