<?php
    date_default_timezone_set('UTC');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Apache OpenID Connect RP</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="/media/css/sandstone.css" media="all">
    </head>
    <body class="sand">
        <div id="outer-wrapper">
          <div id="wrapper">
            <header id="masthead">
              <h1>Apache OpenID Connect RP</h1>
            </header>
          </div>
        </div>
        <div id="main-content">
            <h1>Authentication status</h1>
<?php
                echo "Logged in as: ".$_SERVER['REMOTE_USER'].", also known as ".$_SERVER['OIDC_CLAIM_ID_TOKEN_NAME']." ";
?>
            (<a href="/logout">Logout</a>) (<a href="https://testrp.security.allizom.org">Go back to testrp.security.allizom.org / main page</a>)<br/>
            Your id_token (and session) will expire on: <?php echo date("d F Y H:i:s", $_SERVER['OIDC_CLAIM_ID_TOKEN_EXP']); ?> UTC
            <br/>
            <br/>

            <p>
            This test setup and complete configuration can be found at: <a href="https://github.com/mozilla-iam/testrp.security.allizom.org">https://github.com/mozilla-iam/testrp.security.allizom.org</a>
            </p>

            <h2>Headers</h2>
            <pre>
<?php
            foreach($_SERVER as $key => $value) {
                    if (substr($key, 0, 5) === "OIDC_") {
                        echo $key.":".$value."<br/>";
                    }
            }
?>
            </pre>

            <h2>Endpoints</h2>

            <h3>userinfo</h3>
            <a href="<?php echo $_SERVER['OIDC_CLAIM_iss']; ?>userinfo?access_token=<?php echo $_SERVER['OIDC_access_token'];?>"><?php echo $_SERVER['OIDC_CLAIM_iss']; ?>userinfo?access_token=<?php echo $_SERVER['OIDC_access_token'];?></a>

            <h3>tokeninfo</h3>
            <a href="<?php echo $_SERVER['OIDC_CLAIM_iss']; ?>tokeninfo?id_token=<?php echo $_SERVER['OIDC_id_token'];?>"><?php echo $_SERVER['OIDC_CLAIM_iss']; ?>tokeninfo?id_token=<?php echo $_SERVER['OIDC_id_token'];?></a>
        </div>
    </body>
</html>
