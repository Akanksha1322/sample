<!DOCTYPE html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>Admin</title>
        <meta name="description" content="Ela Admin - HTML5 Admin Template" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png" />
        <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png" />

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css" />
        <link rel="stylesheet" href="public/admin/assets/css/cs-skin-elastic.css" />
        <link rel="stylesheet" href="public/admin/assets/css/style.css" />

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet" type="text/css" />

        <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
        <style>
                    .container {
                        max-width: 100% !important;
                        height: 100vh;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        /*background: url("https://img.freepik.com/free-vector/futuristic-background-design_23-2148503793.jpg?w=740&t=st=1707739579~exp=1707740179~hmac=b21f77cb44826ea34f2483fe4453aa24c1bfd6f222c8a2488101a12c1349b618") center/cover*/
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
                    .verify-btn {
                background-color: #4CAF50;
                border: none;
                color: white;
                padding: 10px 38px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 12px 2px;
                cursor: pointer;
                border-radius: 4px;
            }

            .verify-otp-heading {
              color: #333; /* Text color */
              font-size: 24px; /* Font size */
              text-align: center; /* Center text */
              margin-bottom: 20px; /* Bottom margin */
            }
        </style>
    </head>
    <body class="bg-dark">
        <section class="container">
            <div class="form login">
                <h3 class="text-center verify-otp-heading">OTP verification</h3>
                <h5>
                    <?php if (session()->getFlashdata('msg')) : ?>
                    <div class="alert alert-danger" style="text-align: center;"><?= session()->getFlashdata('msg') ?></div>
                    <?php endif; ?>
                </h5>
                <form action="<?= base_url('admin-verify') ?>" method="POST" enctype="multipart/form-data">
                    <div class="input-field">
                        <input type="text" name="first" maxlength="1" />
                        <input type="text" name="second" maxlength="1" disabled />
                        <input type="text" name="third" maxlength="1" disabled />
                        <input type="text" name="fourth" maxlength="1" disabled />
                        <input type="text" name="fifth" maxlength="1" disabled />
                        <input type="text" name="sixth" maxlength="1" disabled />
                        <input type="hidden" name="adminid" value="<?= $_GET['id']; ?>">
                    </div>
                    <button type="submit" class="active verify-btn">Verify OTP</button>
                </form>
            </div>
        </section>
        <!--otp pass script-->
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

                    if (nextInput && nextInput.hasAttribute("disabled") && currentInput.value !== "") {
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

        <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
        <script src="public/admin/assets/js/main.js"></script>
    </body>
</html>
