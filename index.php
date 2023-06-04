<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Mail</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body style="margin-left:28%;margin-right:28%;margin-top:10%">
    <!-- <form action="sent.php" method="post">
        Email : <input type="email" name="email" value=""><br>
        Message : <input type="text" name="msg" value=""><br>
        <button type="submit" name="send">Send</button>
    </form> -->

    <form action="sent.php" method="post">
  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" id="form1Example1" class="form-control" name="email" placeholder="Enter the email to send" />
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="text" id="form1Example2" class="form-control" name="msg" placeholder="enter the message" />
  </div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block" name="send">Send Mail</button>
</form>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/glide.min.js" integrity="sha512-IkLiryZhI6G4pnA3bBZzYCT9Ewk87U4DGEOz+TnRD3MrKqaUitt+ssHgn2X/sxoM7FxCP/ROUp6wcxjH/GcI5Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
</body>
</html>