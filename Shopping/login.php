<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Log in</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
</head>
<body>
    <!-- Bulma login form -->
    <section class="section">
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-one-third">
                    <form action="user_login.php" method="post">
                        <h1 class="title has-text-centered">Log in</h1>
                        <p class="has-text-centered">Please fill in your credentials to log in.</p>
                        <div class="field">
                            <label class="label">Email</label>
                            <div class="control">
                                <input type="email" name="email" class="input" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Password</label>
                            <div class="control">
                                <input type="password" name="password" class="input" placeholder="Password" required>
                            </div>
                        </div>
                        <div class="field">
                            <div class="control">
                                <button type="submit" name="submit" class="button is-primary is-fullwidth">Log in</button>
                            </div>
                        </div>
                        <p class="has-text-centered">Not registered? <a href="signup.php">Sign up</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
