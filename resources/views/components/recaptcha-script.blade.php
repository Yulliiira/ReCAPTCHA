<script type="text/javascript">
    $('#contactUSForm').submit(function(event) {
        event.preventDefault();

        grecaptcha.ready(function() {
            grecaptcha.execute("{{ env('GOOGLE_RECAPTCHA_KEY') }}", {
                action: 'contact-form'
            }).then(function(token) {
                $('#contactUSForm').prepend(
                    '<input type="hidden" name="g-recaptcha-response" value="' + token + '">'
                );
                $('#contactUSForm').unbind('submit').submit();
            });
        });
    });
</script>
