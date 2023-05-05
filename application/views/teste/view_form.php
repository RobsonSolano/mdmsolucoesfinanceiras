<html>

<head>

</head>


<body>
  <form>
    Name: (required) <input id="field" name="field">
    <div id="recaptcha" class="g-recaptcha" data-sitekey="<?php echo $site_key ?>" data-callback="onSubmit" data-size="invisible"></div>
    <button id="submit">submit</button>
  </form>

  <script>
    
  </script>
  <script src="https://www.google.com/recaptcha/api.js" async defer>
  </script>

  <script>
    onload();
  </script>
</body>

</html>