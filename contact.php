






<?php include_once("include/head.php"); ?>

<body style="background-color: beige;">
    <?php include_once("include/top_nav.php"); ?>
    <div class="container">
        <div class="d-flex flex-column min-vh-100">
            <div class="d-flex flex-grow-1 justify-content-center align-items-center">
                <div class="wrap-contact100">
                    <div class="contact100-form-title" style="background-image: url('https://colorlib.com/etc/cf/ContactFrom_v15/images/bg-01.jpg');">
                        <span class="contact100-form-title-1">
                            Contact Us
                        </span>
                        <span class="contact100-form-title-2">
                            Feel free to drop us a line below!
                        </span>
                    </div>
                    <form class="contact100-form validate-form">
                        <div class="wrap-input100 validate-input" data-validate="Name is required">
                            <span class="label-input100">Full Name:</span>
                            <input class="input100" type="text" name="name" placeholder="Enter full name">
                            <span class="focus-input100"></span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                            <span class="label-input100">Email:</span>
                            <input class="input100" type="text" name="email" placeholder="Enter email addess">
                            <span class="focus-input100"></span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate="Phone is required">
                            <span class="label-input100">Phone:</span>
                            <input class="input100" type="text" name="phone" placeholder="Enter phone number">
                            <span class="focus-input100"></span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate="Message is required">
                            <span class="label-input100">Message:</span>
                            <textarea class="input100" name="message" placeholder="Your Comment..."></textarea>
                            <span class="focus-input100"></span>
                        </div>
                        <div class="container-contact100-form-btn">
                            <button class="contact100-form-btn">
                                <span>
                                    Submit
                                    <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                                </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>