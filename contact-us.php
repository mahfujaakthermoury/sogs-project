<?php
include 'parts/header.php';
?>
<!--contact_section start -->
<section class="contact_section bg-color">
    <div class="container">
        <div class="contact-us row">
            <h2 class="title text-center"><b>Contact Us</b></h2>

            <div class="sitebar col-sm-4 pt-5 ps-5">
                <ul>
                    <li><a href=""><i class="fa-solid fa-house-chimney pe-3"></i>Address</a></li>

                    <li><a href=""><i class="fa-solid fa-phone pe-3"></i>Phone</a></li>

                    <li><a href=""><i class="fa-solid fa-envelope pe-3"></i>E-mail</a></li>

                    <li><a href=""><i class="fa-brands fa-facebook pe-3"></i>Facebook</a></li>
                </ul>
            </div>
            <div class="form col-sm-8 p-5 ">
                <form action="action_page.php">

                    <label for="name">Name</label>
                    <br>
                    <input type="text" id="name" name="name" placeholder="Your name..">
                    <br>
                    <label for="e-mail">E-mail</label>
                    <br>
                    <input type="text" id="e-mail" name="e-mail" placeholder="Your e-mail..">
                    <br>
                    <label for="subject">Subject</label>
                    <br>
                    <input type="text" id="subject" name="subject" placeholder="Your subject..">
                    <br><br>
                    <label for="Message">Message</label>
                    <br>
                    <textarea id="Message" name="Message" placeholder="Write something.."
                        style="height:200px"></textarea>
                    <br> <br>
                    <input type="submit" value="Send Message" class="btn btn-primary" name="form_sumit">

                </form>
            </div>
        </div>
    </div>
</section>
<?php
include 'parts/footer.php'
?>