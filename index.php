<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in & Sign up</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container" id="signUp" style="display:none;">
    <h1 class="form-title">Sign Up</h1>
    <form method="post" action="register.php">
        <div class="input-group">
           <i class="fas fa-user"></i>
           <input type="text" name="fName" id="fName" placeholder="First Name" required>
           <label for="fName">First Name</label>
        </div>
        <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="text" name="lName" id="lName" placeholder="Last Name" required>
            <label for="lName">Last Name</label>
        </div>
        <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <label for="email">Email</label>
        </div>
        <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <label for="password">Password</label>
        </div>
        <input type="submit" class="btn" value="Sign up" name="SignUp">
     </form>
     <p class="or">-------- or --------</p>
     <div class="icons">
        <i class="fab fa-google"></i>
        <i class="fab fa-facebook"></i>
     </div>
     <p>Already Have Account?</p>
     <button id="signInButton">Sign In</button>   
</div>

<div class="container" id="signIn">
    <h1 class="form-title">Sign In</h1>
    <form method="post" action="connect.php">
        <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <label for="email">Email</label>
        </div>
        <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <label for="password">Password</label>
        </div>
        
        <!-- Affichage des messages d'erreur -->
        <?php if (isset($_GET['error'])): ?>
            <?php if ($_GET['error'] == 'empty_fields'): ?>
                <p style="color:red; text-align:center;">Veuillez remplir tous les champs</p>
            <?php elseif ($_GET['error'] == 'invalid_credentials'): ?>
                <p style="color:red; text-align:center;">Données incorrectes</p>
            <?php endif; ?>
        <?php endif; ?>
        
        <input type="submit" class="btn" value="Sign In" name="SignIn">
    </form>
    <p class="or">-------- or --------</p>
    <div class="icons">
        <i class="fab fa-google"></i>
        <i class="fab fa-facebook"></i>
    </div>
    <p>Don't have an account yet?</p>
    <button id="signUpButton">Sign Up</button>   
</div>
<script src="script.js"></script>
</body>
</html>
