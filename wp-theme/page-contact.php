<?php

/*
   Template Nmae: Contact Page

   */

   get_header();
?>

<div id="id" class="site-content">
    <main id="main" class="site-main">
        <section class="contact-hero">
            <div class="container">
                <h1>Contact Us
                    <p>We'd love to hear from you! wether you have a question, feedback, ir a collabroation idea, just drop us a messafe below.</p>
                </h1>
            </div>
        </section>
        
        <section class="contact-form-section">
            <div class="container">
                <form action=""method="post" class="contact-form">
                <p>
                    <label for="name">Your Name</label><br>
                    <input type="text" id="name" name="name" required>


                </p>

                <p>
                    <label for="email">Your Email</label><br>
                    <input type="email" id="email" name="email" required>


                </p>

                <p>
                    <label for="subject">Subject</label><br>
                    <input type="text" id="Subject" name="Subject" required>


                </p>
                <p>
                    <label for="message">Message</label><br>
                    <textarea  id="message" name="message"  rows="6" required> </textarea>


                 </p>
                 <p>
                    
                    <input type="submit" id="submit_contact" name="submint_contact" value="send message" >


                </p>



                </form>


            </div>
        </section>
        


    </main>
</div>

<?php  get_footer();         ?>