<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
    <meta charset="utf-8">
        <title>Contact Form</title>

        <link rel="stylesheet" type="text/css" href="css/style.css" media="all">

        <!-- GOOGLE FONTS -->
        <link rel="stylesheet" href="https://use.typekit.net/qcf2avp.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body class="contact-body">
    <div class="container-c">
    <div class="content">

      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">ADDRESS</div>
          <div class="text-one">4411 Kent Road #4</div>
          <div class="text-two">Stow Ohio 44224</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">PHONE</div>
          <div class="text-one">(234) 334-7194</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">EMAIL</div>
          <div class="text-one">OrrChiro@gmail.com</div>
        </div>
      </div>

      <div class="right-side">
        <form id="contact-form" class="contact-us-form" action="functions/functions.php" method="post">
        <fieldset>
            <legend class="topic-text">CONTACT US</legend>
            <p class="love-to-hear">WE'D LOVE TO HEAR FROM YOU.</p>
            <ul style="list-style: none;">
                <li><br />
                    <label for="name">Name</label>
                    <input class="input-box" type="text" name="name" id="name">
                </li><br />

                <li>
                    <label for="email">Email</label>
                        <input class="input-box" type="email" name="email" id="email">
                </li><br />
                <li>
                    <label for="message">Message</label>
                        <input class="message-box" type="text" name="message" id="message">
                </li><br />
        </div>
            </ul>
        </fieldset>
        <input class="button" type="submit" value="SUBMIT">
    </div>
    </form>

        </div>
    </body>
</html>
