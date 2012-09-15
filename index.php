<!DOCTYPE html>
<html>
  <head>
    <title>Timbo Text Viewer Beta</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
  </head>
  <body>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Timbo Text Viewer</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
    <div class="container">
        <div class="hero-unit">
            <h1>Hello!</h1>
            <p>Just enter your text into the box on the left, select the rules you want applied on the right, click "View" and enjoy reading your content in all its magical readable glory.</p>
        </div>
        <div class="row">
            <form class="form-text-input">
                <div class="span8">
                    <textarea class="span8" rows="6"></textarea>.
                    <div class="form-action">
                        <button type="submit" class="btn btn-primary">View</button>
                    </div>
                </div>
                <div class="span4">
                    <label class="rule1">
                        <input type="checkbox" value="" checked="yes">
                        Newline after every sentence.
                    </label>
                    <label class="rule2">
                        <input type="checkbox" value="" checked="yes">
                        Newline + Tab after every comma.
                    </label>
                    <label class="rule3">
                        <input type="checkbox" value="" checked="yes">
                        Newline + Tab after every semi-colon.
                    </label>
                    <label class="rule4">
                        <input type="checkbox" value="" checked="yes">
                        Newline + Tab after every colon.
                    </label>
                </div>
            </form>
        </div>
    </div>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
