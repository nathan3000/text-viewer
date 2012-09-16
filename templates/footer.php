
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">    
    $(function() {
        var newInput = '<div class="input-append"><input type="text" name="rules[]" placeholder="Rule here.."><button class="add-button btn" type="button">Add</button></div>'
        $('.rules').on('click', '.add-button', function() {
            $(this).text('Remove');
            $(this).parent().children('input').attr('readonly', "readonly");
            $(this).removeClass('add-button').addClass('remove-button');
           $('.rules').append(newInput); 
        });

        $('.rules').on('click', '.remove-button', function() {
            $(this).parent().remove();
        });
    });
    </script>
  </body>
</html>
