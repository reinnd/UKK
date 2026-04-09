<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link rel="stylesheet" href="asset/style/font.css">
    <link rel="stylesheet" href="asset/style/prop.css?v=3.1">
    <link rel="stylesheet" href="asset/style/header.css?v=3">
    <link rel="stylesheet" href="asset/style/style.css?v=3">
    <style>
        .profile-card {
            width: 100vw;
            min-width: 500px;
            height: 100vh;
            background-color: #e6e6ba;
            margin-top: 20px;
            margin: auto;
            justify-content: center;
        }

        .flex-column {
            flex-direction: column;
        }
        .profile-holder-big {
            border: 1px solid black;
            border-radius: 50%;
            overflow: hidden;
            width: 240px;
            height: 240px;
            vertical-align: middle;
        }

        .profile-holder-big img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        .top-profile {
            padding: 32px 24px 0 24px;
            border: 1px solid black;

            max-width: 400px;
            
        }

        .mid-profile {
            padding: 32px 24px 0 24px;
            border: 1px solid black;
        }

        .bottom-profile {
            padding: 32px 24px 0 24px;
            border: 1px solid black;
        }

        .btn-form {
            background-color: #e6b5b5;
            color: #000;
            padding: 12px 24px;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            width: 100%;
            transition: 0.3s;
        }
    </style>
</head>

<body>

    <section class="profile-card flex">
        <section class="top-profile flex flex-column flex-grow">
            <img class="profile-holder-big" src="asset/img/pfp/test_img.jpg" alt="Profile Picture">
        </section>
        <div class="flex flex-column flex-grow">
            
            <section class="mid-profile flex-grow">
            </section>
            <section class="bottom-profile flex-grow">
                <a href="" class="btn-form">Logout</a>
            </section>
        </div>
    </section>

</body>

</html>