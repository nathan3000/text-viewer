<?php require('header.php'); ?>
    <div class="container">
       <div class="row">
           <form class="form-text-input" action="view" method="post">
                <div class="span8">
                    <legend>Paste your text</legend>
                     <? if(isset($error)): ?>
                    <div class="alert alert-error">
                        <strong>Oops! </strong><?=$error;?>
                    </div>
                    <? endif; ?>
                    <textarea class="span8" rows="6" name="text" placeholder="Text to display.."></textarea>
                    <div class="form-action">
                        <button type="submit" class="btn btn-primary">View</button>
                    </div>
                </div>
                <div class="rules span4">
                    <legend>Set your rules</legend>
                    <div class="input-append">
                        <input type="text" name="rules[]" value="new-line after sentence" readonly="readonly">
                        <button class="remove-button btn" type="button">Remove</button>
                    </div>
                    <div class="input-append">
                        <input type="text" name="rules[]" value="new-line and tab after comma" readonly="readonly">
                        <button class="remove-button btn" type="button">Remove</button>
                    </div>
                    <div class="input-append">
                        <input type="text" name="rules[]" placeholder="Rule here..">
                        <button class="add-button btn" type="button">Add</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php require('footer.php'); ?>
