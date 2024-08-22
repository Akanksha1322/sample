<!DOCTYPE html>
<html>
<head>
	<title>Cake</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="author" content="TemplatesJungle">
	<meta name="keywords" content="html,css,template,bootstrap">
	<!--<meta name="description" content="Bootstrap 5 HTML Cake Shop Template">-->
	<!--<link rel="stylesheet" type="text/css" href="fonts/icomoon/icomoon.css">-->
	<!--<link rel="stylesheet" type="text/css" href="css/vendor.css" />-->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap"
		rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style>
        .container {
            max-width: 100% !important;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQapHZj7q2DZY0H5lMJYJec5MdUUE4G86aW_g&usqp=CAU") center/cover
                no-repeat;
        }

        .form {
            position: absolute;
            max-width: 430px;
            width: 100%;
            padding: 30px;
            border-radius: 6px;
            background: #fff;
        }
        
        :where(.container, form, .input-field, header) {
          display: flex;
          flex-direction: column;
          align-items: center;
          justify-content: center;
        }
        
        form .input-field {
          flex-direction: row;
          column-gap: 10px;
        }
        .input-field input {
          height: 45px;
          width: 50px;
          border-radius: 6px;
          outline: none;
          font-size: 1.125rem;
          text-align: center;
          border: 1px solid #ddd;
        }
       
    </style>
</head>

<body>
    <section class="container">
        <div class="form login">
            <h3 class="text-center" style="text-align:center;">Verify OTP</h3>
            <h5>
                <?php if (session()->getFlashdata('error')) : ?>
                    <div class="alert alert-danger" style="text-align:center;"><?= session()->getFlashdata('error') ?></div>
                <?php elseif (session()->getFlashdata('success')) : ?>
                    <div class="alert alert-success" style="text-align:center;"><?= session()->getFlashdata('success') ?></div>
                <?php endif; ?>
            </h5>
            <form action="<?= base_url('verify') ?>" method="POST" enctype="multipart/form-data">
                <div class="input-field" style="margin:5%;">
                    <input type="text" name="first" maxlength="1"/>
                    <input type="text" name="second" maxlength="1" disabled />
                    <input type="text" name="third" maxlength="1" disabled />
                    <input type="text" name="fourth" maxlength="1" disabled />
                    <input type="text" name="fifth" maxlength="1" disabled />
                    <input type="text" name="sixth" maxlength="1" disabled />
                    <input type="hidden" name="userid" value="<?= $_GET['id']; ?>">
                </div>
                <button type="submit" class="submit" style="padding:10px; background-color:#616b37">Verify OTP</button>
            </form>
        </div>
    </section>
    
    <script>
        const inputs = document.querySelectorAll("input"),
        button = document.querySelector("button");
    
        // iterate over all inputs
        inputs.forEach((input, index1) => {
          input.addEventListener("keyup", (e) => {
            const currentInput = input,
              nextInput = input.nextElementSibling,
              prevInput = input.previousElementSibling;
        
            if (currentInput.value.length > 1) {
              currentInput.value = "";
              return;
            }
        
            if (
              nextInput &&
              nextInput.hasAttribute("disabled") &&
              currentInput.value !== ""
            ) {
              nextInput.removeAttribute("disabled");
              nextInput.focus();
            }
        
            if (e.key === "Backspace") {
              inputs.forEach((input, index2) => {
                if (index1 <= index2 && prevInput) {
                  input.setAttribute("disabled", true);
                  input.value = "";
                  prevInput.focus();
                }
              });
            }
        
            if (!inputs[3].disabled && inputs[3].value !== "") {
              button.classList.add("active");
              return;
            }
            button.classList.remove("active");
          });
        });
        
        window.addEventListener("load", () => inputs[0].focus());

    </script>
    
    <script src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>