<hr/>
<footer style="text-align: center;">Copyright &copy; <?php echo date('Y'); ?></footer>
<script type="text/javascript">
    $(function() {
        $("#send_mail").click(function() {
            var name = $("#name").val();
            var email = $("#email").val();
            var message = $("#message").val();

            if($.trim(name) == "" || $.trim(email) == "" || $.trim(message) == "") {
                alert("Name, email and messages are required fields.");
            }
            else {
               $.post("/send", { name: name, email: email, message: message }, function(data) {
                  console.log(data);
               });
            }
        });
    });
</script>
</body>
</html>