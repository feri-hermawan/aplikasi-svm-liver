<!-- Header -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title><?= $data['title'] ?></title>
    <link rel="icon" type="image/x-icon" href="/img/liver-icon.ico">
</head>

<body>
    <div class="sidebar">
        <div class="logo"><img src="/img/liver-white.png" alt="logo">
            <span class="logo-name">Prediksi Penyakit Liver</span>
        </div>
        <ul class="nav-list">
            <li>
                <a href="/dashboard">
                    <i class="fa-solid fa-gauge fs-5"></i>
                    <span class="link-name">Dashboard</span>
                </a>
                <ul class="sub-menu blank">
                    <li><span class="link-name">Dashboard2</span></li>
                </ul>
            </li>
            <li>
                <a href="/datatraining">
                    <i class="fa-solid fa-brain fs-5"></i>
                    <span class="link-name">Data Training</span>
                </a>
                <ul class="sub-menu blank">
                    <li><span class="link-name">Data Training</span></li>
                </ul>
            </li>
            <li>
                <a href="/datatesting">
                    <i class="fa-solid fa-microscope fs-5"></i>
                    <span class="link-name">Data Testing</span>
                </a>
                <ul class="sub-menu blank">
                    <li><span class="link-name">Data Testing</span></li>
                </ul>
            </li>
            <li>
                <a href="/visualisasi">
                    <i class="fa-solid fa-eye fs-5"></i>
                    <span class="link-name">Visualisasi</span>
                </a>
                <ul class="sub-menu blank">
                    <li><span class="link-name">Visualisasi</span></li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="home-section">
        <div class="home-content">
            <button type="button" onclick="ToggleSidebar()" style="border: none; background-color:#14A44D;"><i class="fa-solid fa-bars bars"></i></button>
            <span class="text">Prediksi Penyakit Liver</span>
        </div>
    </div>
    </div>
    </div>