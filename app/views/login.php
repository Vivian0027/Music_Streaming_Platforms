<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="shortcut icon" href="../../public/images/other/favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../public/css/base.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">

    <style>
        * {
            color: var( --white-color) !important;
        }

        body {
            margin: 0;
            width: 100vw;
            height: 100vh;
            background-image: url(../../public/images/other/wallpaperflare.com_wallpaper.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #form-login-container {
            background-color: rgba(0, 0, 0, 0.7);
            padding: 48px 24px;
            width: 60%;
            max-width: 400px;
            border-radius: 12px;
            border: 1px solid var(--pink_strong-color);
            box-shadow: 0 0 25px var(--pink_strong-color);
        }

        input[type='text'],
        input[type='password'] {
            background: transparent !important;
        }

        .input-container {
            border-bottom: 2px solid var(--white-color) !important;

        }

        button {
            background: linear-gradient(to right, var(--orange-color), var(--pink_strong-color));
        }
        
        @media screen and (max-width: 576px) {
            #form-login-container {
            background-color: rgba(0, 0, 0, 0.7);
            padding: 48px 24px;
            width: 100%;
            border-radius: 12px;
            border: 1px solid var(--pink_strong-color);
            box-shadow: 0 0 25px var(--pink_strong-color);

            .form-check {
                display: flex;
                flex-direction: column;
            }
        }
        }
    </style>
</head>
<body>
    <div id="form-login-container">
        <h2 class="text-center">Đăng nhập</h2>
        <form action="">
            <div class="mb-3 input-container mt-5 d-flex align-self-center justify-content-between">
                <input type="text" class="form-control no-outline shadow-none rounded-0 ps-0" autocomplete="off" id="username" placeholder="Tên đăng nhập" name="username" required>
                <i class="fa-solid fa-user lh-lg"></i>
              </div>
              <div class="mb-3 input-container d-flex align-self-center justify-content-between">
                <input type="password" class="form-control no-outline shadow-none rounded-0 ps-0" id="pwd" placeholder="Nhập mật khẩu" name="pswd" required>
                <i class="fa-solid fa-lock lh-lg"></i>
            </div>
              <div class="form-check mb-3 d-flex justify-content-between">
                <label class="form-check-label mb-2">
                  <input class="form-check-input no-outline shadow-none" type="checkbox" name="remember"> Remember me
                </label>
                <a href="" class="text-decoration-none text-orange-primary">Bạn quên mật khẩu?</a>
              </div>
              <button type="submit" class="btn w-100">Đăng nhập</button>
              <div class="text-center mt-3">
                <span>Bạn chưa có tài khoản?</span>
                <a href="register.php" class="text-decoration-none text-orange-primary">Đăng ký</a>
              </div>
        </form>
    </div>
</body>
</html>