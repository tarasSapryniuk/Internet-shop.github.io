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
                                    <li><a href="/user/register/">Register</a></li>
                                    <li>Log In</li>
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
                    <?php if (isset($errors) && is_array($errors)): ?>
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li> - <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                    <div class="contact_form_container">
                        <form action="#" method="post" id="contact_form" class="contact_form">
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
                            <input type="submit" name="submit" class="button contact_button" value="Log In">
                        </form>
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