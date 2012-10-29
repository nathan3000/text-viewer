
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui-1.8.23.custom.min.js"></script>
    <script type="text/javascript">    
    $(function() {
        var newInput = '<div class="input-append"><input type="text" name="rules[]" placeholder="Rule here.."><button class="add-button btn" type="button">Add</button></div>'
        $('.rules').on('click', '.add-button', function() {
            if( $(this).parent().children('input').val()) {
                $(this).text('Remove');
                $(this).removeClass('add-button').addClass('remove-button');
                $(this).parent().children('input').attr('name', 'rules[]').addClass('success');
                $('.rules').append(newInput); 
            } else {
                $(this).parent().children('input').toggleClass('error', 'normal').toggleClass('error', 'normal');
            }
        });

        $('.rules').on('click', '.remove-button', function() {
            $(this).parent().remove();
        });

        $('.form-text-input').submit(function(e) {
            if( $('textarea').val() ) {
                return true;
            } else {
               e.preventDefault();
               $('textarea').addClass('error', 'normal').removeClass('error', 'normal'); 
            }
        });
    });
    </script>
  </body>
</html>
