<?php include 'partials/header.php'; ?>
<?php include 'partials/menu.php'; ?>
    <div class="content">
        <h1><?php echo $page_title; ?></h1>
        <form method="post">
            Name: <input type="text" placeholder="Name" name="name" id="name" /><br /><br />
            Email: <input type="text" placeholder="Email" name="email" id="email" /><br /><br />
            Message: <textarea name="message" placeholder="Message" id="message" rows="10"></textarea><br /><br />
            <input type="button" id="send_mail" value="Send" />
        </form>
    </div>
<?php include 'partials/footer.php'; ?>