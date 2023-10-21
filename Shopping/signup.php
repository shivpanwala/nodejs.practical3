<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Sign up</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <?php
    // Show error message if captcha is not verified
    if(isset($_GET['error'])){
        echo '<script>alert("Captcha verification failed. Please try again.")</script>';
    }
    ?>
</head>
<body>
    <!-- Bulma signup form -->
    <section class="section">
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-one-third">
                    <form action="user_signup.php" method="post">
                        <h1 class="title has-text-centered">Sign up</h1>
                        <p class="has-text-centered">Please fill in this form to create an account.</p>
                        <div class="field">
                            <label class="label">Name</label>
                            <div class="control">
                                <input type="text" name="name" class="input" placeholder="Name" required>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Email</label>
                            <div class="control">
                                <input type="email" name="email" class="input" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">City</label>
                            <div class="control">
                                <input type="text" name="city" class="input" placeholder="City" required>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Address</label>
                            <div class="control">
                                <input type="text" name="address" class="input" placeholder="Address" required>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Phone no.</label>
                            <div class="control">
                                <input type="tel" name="phone" class="input" placeholder="Phone no." required>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Pincode</label>
                            <div class="control">
                                <input type="number" name="pincode" class="input" placeholder="Pincode" required>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Password</label>
                            <div class="control">
                                <input type="password" name="password" class="input" placeholder="Password" required>
                            </div>
                        </div>
                        <!-- Show CAPTCHA -->
                        <div class="field">
                            <label class="label">Enter captcha</label>
                            <div class="control has-addons">
                                <input type="text" name="captcha" class="input" required>
                                <img src="captcha.php" alt="captcha" class="captcha-image">
                            </div>
                        </div>
                        <div class="field">
                            <div class="control">
                                <button type="submit" name="submit" class="button is-primary is-fullwidth">Sign up</button>
                            </div>
                        </div>
                        <p class="has-text-centered">Already have an account? <a href="login.php">Log in</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
