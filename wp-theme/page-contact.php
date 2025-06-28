<?php 
/*
  Template Name: contact page
*/

get_header();
?>

<div id="content" class="site-content">
    <main id="main" class="site-main">
      <section class="contact-hero">
        <div class="container">
            <h1>Contact us </h1>
            <p>wed love to hear from you! whether you have a question, feedback, or a collaboration idea, just drop us a message below.</p>
        </div>
      </section>
        <section class="contact-form-section">
            <div class="container">
                <form action="" method="post" class="contact-form">
                  <p>
                     <label for="name">Your name</label><br>
                     <input type="text" id="name" name="name" require>
                  </p>
                  <p>
                     <label for="email">Your email</label><br>
                     <input type="text" id="email" name="email" require>
                  </p>
                  <p>
                     <label for="subject">Your subject</label><br>
                     <input type="text" id="subject" name="subject" require>
                  </p>
                  <p>
                     <label for="message">Your message</label><br>
                     <textarea id="mesagge" name="mesagge"rows="6" require> </textarea>
                  </p>
                  <p> 
                     <input type="submit" name="submit_contact" value="send message" require>
                  </p>
                </form>
            </div>
        </section>
    </main>
</div>
<?php get_footer()  ?>