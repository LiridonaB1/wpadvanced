<?php  
/*
  Template Name: Contact Page
*/

get_header();
?>

<div id="content" class="site-content">
    <main id="main" class="site-main">
        <section class="contact-hero">
            <div class="container">
                <h1>contact us</h1>
                <p>wed love to hear from you! whether you have a question, feedback, or a collaboration idea, just drop us a message below.</p>         
            </div>
        </section>

        <section class="contant-form-section">
            <div class="container">
                <form action="" method="post" class="contact-form">
                    <p>
                        <label for="name">your name</label><br>
                        <input type="text" id="name" name="name" required>
                    </p>
                     <p>
                        <label for="email">your email</label><br>
                        <input type="email" id="email" name="email" required>
                    </p>
                    <p>
                        <label for="subject">your subject</label><br>
                        <input type="text" id="subject" name="subject" required>
                    </p>
                     <p>
                        <label for="message">your message</label><br>
                        <textarea id="message" name="message" rows="6" required> </textarea>
                    </p>
                    <p>
                        <input type="submit" name="submit_contact" value="send message">
                    </p>
                    
                </form>
            </div>
        </section>
    </main>
</div>

<?php get_footer(); ?>