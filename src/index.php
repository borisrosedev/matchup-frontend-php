<?php 


$message = "Hello"


?>


<!DOCTYPE html>
<html>

    <head>
        <link rel="stylesheet" href="./css/styles.css">
    </head>
    <body>
        <main class="matchup-main login__main">
            <form 
                action="./handlers/login-form.handler.php" 
                method="POST"
            >
                <article class="field">
                <p class="control has-icons-left has-icons-right">
                    <input 
                        class="input is-primary" 
                        type="text" 
                        placeholder="Email"
                        name="email"
                    >
                    <span class="icon is-small is-left">
                    <i class="fas fa-envelope"></i>
                    </span>
                    <span class="icon is-small is-right">
                    <i class="fas fa-check"></i>
                    </span>
                </p>
                </article>
                <article class="field">
                <p class="control has-icons-left">
                    <input 
                        class="input is-primary" 
                        type="password" 
                        placeholder="Password"
                        name="password"
                    >
                    <span class="icon is-small is-left">
                    <i class="fas fa-lock"></i>
                    </span>
                </p>
                </article>
                <article class="field">
                <p class="control">
                    <button class="button is-success">
                    Login
                    </button>
                </p>
                </article>
            </form>

        </main>
    

    </body>


</html>




