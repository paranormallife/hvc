<!-- /snippets/header_buttons.php ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

<?php
    $telephone = get_option('telephone');
    $email = get_option('email');
?>

<section id="header-buttons">

    <div class="header-button telephone" id="telephone_toggle">
        <div class="toggle" onclick="telToggle()">
            <i class="fas fa-mobile-alt icon"></i>
            <span>Call Us</span>
        </div>
    </div>

    <div class="header-button email" id="email_toggle">
        <div class="toggle" onclick="emailToggle()">
            <i class="fas fa-at icon"></i>
            <span>Email Us</span>
        </div>
    </div>

    <div class="content telephone" id="telephone_content">
        <a href="tel:<?php echo $telephone; ?>" title="Call Us">
            <?php echo $telephone; ?>
        </a>
    </div>

    <div class="content email" id="email_content">
        <a href="mailto:<?php echo $email; ?>" title="Email Us">
            <?php echo $email; ?>
        </a>
    </div>

</section>

<script>
function telToggle() {
    var element = document.getElementById("telephone_toggle");
    element.classList.toggle("active");
    var element = document.getElementById("telephone_content");
    element.classList.toggle("active");
    var element = document.getElementById("email_toggle");
    element.classList.remove("active");
    var element = document.getElementById("email_content");
    element.classList.remove("active");
}

function emailToggle() {
    var element = document.getElementById("email_toggle");
    element.classList.toggle("active");
    var element = document.getElementById("email_content");
    element.classList.toggle("active");
    var element = document.getElementById("telephone_toggle");
    element.classList.remove("active");
    var element = document.getElementById("telephone_content");
    element.classList.remove("active");
}
</script>