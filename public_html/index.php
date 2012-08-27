<?php

    /**
     * Login System
     *
     * @desc        This is a basic login system.
     * @author      Elliot Wright
     */

    $bolLoggedIn = false;

    $arrUsers = array( array( 'username' => 'Seer', 'password' => 'Password1' )
                      ,array( 'username' => 'Zoe',  'password' => 'Password1' ) );

    if( isset( $_POST['username'] ) && isset( $_POST['password'] ) )
    {

        // If we're working with a real database we want to escape strings to make them
        // safe for the database to work with.
        //
        // $strUsername = mysql_real_escape_string( $_POST['username'] );
        $strUsername = $_POST['username'];
        $strPassword = $_POST['password'];

        foreach( $arrUsers as $arrUser )
        {

            if ( $strUsername == $arrUser['username'] && $strPassword == $arrUser['password'] )
            {

                $bolLoggedIn = true;
                break;

            }

        }

    }

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login System</title>
        <style>
            input[type='text'], input[type='password'] {
                background-color: #eee;
                border: 1px solid #aaa;
                padding: 7px;
            }
                input[type='text']:hover, input[type='password']:hover, input[type='text']:focus, input[type='password']:focus {
                    background-color: #f9f9f9;
                }
        </style>
    </head>
    <body>
        <?php

            if ( !$bolLoggedIn ) {

        ?>
        <form method="POST">
            <input name="username" type="text" placeholder="Username..." /><br />
            <input name="password" type="password" placeholder="Password..." /><br /><br />
            <input type="submit" value="Sign In" />
        </form>
        <?php

            } else {

        ?>
        <p>Welcome back, <?php echo $strUsername; ?>.</p>
        <?php

            }

        ?>
    </body>
</html>
