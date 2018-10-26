
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>
    function onSubmit(token) {
        document.getElementById("i-recaptcha").submit();
    }
</script>  
<?php include ROOT . '/views/layouts/header.php'; ?> 
<div class="home">
    <div class="home_container">
        <div class="home_background" style="background-image:url(/template/images/contact.jpg)"></div>
        <div class="home_content_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_content">
                            <div class="breadcrumbs">
                                <ul>
                                    <li><a href="/ ">Home</a></li>
                                    <li><a href="/user/login/">Log In</a></li>
                                    <li>Register</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact -->

<div class="contact">
    <div class="container">
        <div class="row">

            <!-- Get in touch -->
            <div class="col-lg-8 contact_col">
                <div class="get_in_touch">
                    <div class="contact_form_container">
                    
                        
                    <!-- If CAPTCHA is successful... -->

                    <!-- Paste mail function or whatever else you want to happen here! -->
                    <?php if ($result): ?>
                        <p>Вы зарегистрированы!</p>
                        <?php User::register($_POST['first_name'], $_POST['email'], $_POST['password']); ?>
                    
                        <?php if (isset($errors) && is_array($errors)): ?>
                            <ul>
                                <?php foreach ($errors as $error): ?>
                                    <li> - <?php echo $error; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        

                        <?php endif; ?>
                   <?php else: ?>
                            
                    <!-- FORM GOES HERE -->
                    <form action="#" method="post" id="i-recaptcha" class="contact_form">
                        <div class="row">
                            <div class="col-xl-6">
                                <!-- Name -->
                                <label for="contact_name">First Name*</label>
                                <input type="text" id="contact_name" name="first_name" class="contact_input" required="required">
                            </div>
                            <div class="col-xl-6 last_name_col">
                                <!-- Last Name -->
                                <label for="contact_last_name">Last Name*</label>
                                <input type="text" id="contact_last_name" name="last_name" class="contact_input" required="required">
                            </div>
                        </div>
                        <div>
                        <!-- Email -->
                            <label for="contact_company">Email*</label>
                            <input type="text" name="email" id="contact_company" class="contact_input">
                        </div>
                        <div>
                        <!-- Password -->
                            <label for="contact_company">Password*</label>
                            <input type="password" name="password" id="contact_company" class="contact_input">
                        </div>
                        <button class="button contact_button g-recaptcha" data-sitekey="6LfEOHYUAAAAAL9Dt4MyAvD7WeQ7HtJj8-ZNTjCV" data-callback="onSubmit"> 
                            <span>Registration</span>
                        </button>
                    </form>
                    <?php endif; ?>

                    
                        
                    </div>
                </div>
            </div>

            <div class="col-lg-3 offset-xl-1 contact_col">
                <div class="contact_info">
                    <div class="contact_info_section">
                        <div class="contact_info_title">Information</div>
                        <ul>
                            <li>Phone: <span>+53 345 7953 3245</span></li>
                            <li>Email: <span>yourmail@gmail.com</span></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php include ROOT . '/views/layouts/footer.php'; ?>
<link rel="stylesheet" type="text/css" href="/template/styles/contact.css">
<link rel="stylesheet" type="text/css" href="/template/styles/contact_responsive.css">