<?php require('header.php'); ?>
    <div class="container">
        <div class="hero-unit">
            <h1>Hello!</h1>
            <p>Just enter your text into the box on the left, select the rules you want applied on the right, click "View" and enjoy reading your content in all its magical readable glory.</p>
        </div>
        <div class="row">
            <form class="form-text-input" action="view" method="post">
                <div class="span8">
                    <textarea class="span8" rows="6" name="text"></textarea>.
                    <div class="form-action">
                        <button type="submit" class="btn btn-primary">View</button>
                    </div>
                </div>
                <div class="span4">
                    <label class="rule1">
                        <input type="checkbox" value="" checked="yes" name="rule-sentence-newline">
                        Newline after every sentence.
                    </label>
                    <label class="rule2">
                        <input type="checkbox" value="" checked="yes" name="rule-comma-newline-tab">
                        Newline + Tab after every comma.
                    </label>
                    <label class="rule3">
                        <input type="checkbox" value="" checked="yes" name="rule-semicolon-newline-tab">
                        Newline + Tab after every semi-colon.
                    </label>
                    <label class="rule4">
                        <input type="checkbox" value="" checked="yes" name="rule-colon-newline-tab">
                        Newline + Tab after every colon.
                    </label>
                </div>
            </form>
        </div>
    </div>
<?php require('footer.php'); ?>
