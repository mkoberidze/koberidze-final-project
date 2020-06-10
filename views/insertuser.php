<?php

?>
<form method="post" action="/insertuser">
    <div class="form-group">
        <label for="insertuser">Name</label>
        <input type="text" class="form-control <?php echo isset($errors['insertuser']) ? ' is-invalid' : '' ?>"
               value="<?php if(isset($_SESSION['insertuser'])) echo $_SESSION['insertuser']; else echo "";  ?>" name="insertuser">
        <div class="invalid-feedback">
            <?php echo $errors['insertuser'] ?? '' ?>
        </div>

        <label for="surname">Surname</label>
        <input type="text" class="form-control <?php echo isset($errors['surname']) ? ' is-invalid' : '' ?>" id="surname" name="surname"
               value="<?php if(isset($_SESSION['surname'])) echo $_SESSION['surname']; else echo ""; ?>">
        <div class="invalid-feedback">
            <?php echo $errors['surname'] ?? '' ?>
        </div>

        <label for="email">Email</label>
        <input type="text" class="form-control <?php echo isset($errors['email']) ? ' is-invalid' : '' ?>" id="email" name="email"
               value="<?php if(isset($_SESSION['email'])) echo $_SESSION['email']; else echo ""; ?>">
        <div class="invalid-feedback">
            <?php echo $errors['email'] ?? '' ?>
        </div>

        <label for="country">country</label>
        <input type="text" class="form-control <?php echo isset($errors['country']) ? ' is-invalid' : '' ?>" id="country" name="country"
               value="<?php if(isset($_SESSION['country'])) echo $_SESSION['country']; else echo ""; ?>">
        <div class="invalid-feedback">
            <?php echo $errors['country'] ?? '' ?>
        </div>
        <label for="city">city</label>
        <input type="text" class="form-control <?php echo isset($errors['city']) ? ' is-invalid' : '' ?>" id="city" name="city"
               value="<?php if(isset($_SESSION['city'])) echo $_SESSION['city']; else echo ""; ?>">
        <div class="invalid-feedback">
            <?php echo $errors['city'] ?? '' ?>
        </div>
        <label for="phonenumber">phonenumber</label>
        <input type="number" class="form-control <?php echo isset($errors['phonenumber']) ? ' is-invalid' : '' ?>" id="phonenumber" name="phonenumber"
               value="<?php if(isset($_SESSION['phonenumber'])) echo $_SESSION['phonenumber']; else echo ""; ?>">
        <div class="invalid-feedback">
            <?php echo $errors['phonenumber'] ?? '' ?>
        </div>
        <label for="education">education</label>
        <input type="text" class="form-control <?php echo isset($errors['education']) ? ' is-invalid' : '' ?>" id="education" name="education"
               value="<?php if(isset($_SESSION['education'])) echo $_SESSION['education']; else echo ""; ?>">
        <div class="invalid-feedback">
            <?php echo $errors['education'] ?? '' ?>
        </div>
        <label for="experience">experience</label>
        <input type="text" class="form-control <?php echo isset($errors['experience']) ? ' is-invalid' : '' ?>" id="experience" name="experience"
               value="<?php if(isset($_SESSION['experience'])) echo $_SESSION['experience']; else echo ""; ?>">
        <div class="invalid-feedback">
            <?php echo $errors['experience'] ?? '' ?>
        </div>

<button type="submit" id = "sbmt" class="btn btn-primary">Submit</button>
</form>