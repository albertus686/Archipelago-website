<?php
$lang_code = $_GET['lang'] ?? 'en';
$allowed = ['en','id','zh','fr'];
if(!in_array($lang_code, $allowed)) $lang_code = 'en';
$lang = include __DIR__ . "/assets/lang/{$lang_code}.php";
function t($k){ global $lang; return $lang[$k] ?? $k; }
?>
<!doctype html><html lang="<?php echo htmlspecialchars($lang_code); ?>">
<head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>PT Archipelago Jaya Nusantara | Export Wood Pellets</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/themes/prism.min.css" />
<link rel="stylesheet" href="assets/style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Roboto:wght@300;400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link rel="stylesheet" href="assets/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@7/css/flag-icons.min.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<link rel="icon" href="assets/logo.ico" type="image/x-icon">
</head>
<body class="site-light">
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>

<header class="nav-box fixed-top">
  <div class="container d-flex align-items-center justify-content-between" style="height:80px">
    <div class="d-flex align-items-center gap-3">
      <a href="index.php"><img src="assets/logo.png" alt="logo" class="site-logo"></a>
      <div class="d-none d-md-block">
        <div class="fw-bold company-name">PT Archipelago Jaya Nusantara</div>
        <small class="text-white-50 text-muted">Sustainable Biomass Exporter</small>
      </div>
    </div>

<div class="hanging-egg" id="egg">
  <div class="egg-shell top"></div>
  <div class="egg-shell bottom"></div>
  <div class="chick">
    <div class="chick-eye left"></div>
    <div class="chick-eye right"></div>
    <div class="chick-beak"></div>
  </div>
</div>


<div class="chick-popup" id="chickPopup">
  <div class="popup-content">
    <button class="close-popup">&times;</button>
    <h4>Hello Sayang</h4>
    <p>Kami sayang om andreas</p>
  </div>
</div>
    <nav>
      <ul class="nav align-items-center">
        <li class="nav-item"><a class="nav-link" href="index.php?lang=<?php echo $lang_code; ?>">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="about.php?lang=<?php echo $lang_code; ?>"><?php echo t('about_title'); ?></a></li>
        <li class="nav-item"><a class="nav-link" href="products.php?lang=<?php echo $lang_code; ?>"><?php echo t('products_title'); ?></a></li>
        <li class="nav-item"><a class="nav-link" href="contact.php?lang=<?php echo $lang_code; ?>"><?php echo t('contact_title'); ?></a></li>
        <li class="nav-item ms-3"><a class="btn btn-cta" href="contact.php?lang=<?php echo $lang_code; ?>"><?php echo t('get_quote'); ?></a></li>
       <li class="nav-item dropdown ms-3">
  <?php
    // Logika untuk menentukan bendera dan teks
    $flag_class = '';
    $lang_text = '';

    switch ($lang_code) {
        case 'id':
            $flag_class = 'fi-id';
            $lang_text = 'ID'; // Sesuai permintaan Anda
            break;
        case 'zh':
            $flag_class = 'fi-cn'; // Bendera China
            $lang_text = 'ZH';
            break;
        case 'fr':
            $flag_class = 'fi-fr';
            $lang_text = 'FR';
            break;
        case 'en':
        default:
            $flag_class = 'fi-us'; // Bendera US
            $lang_text = 'EN-US'; // Sesuai permintaan Anda
            break;
    }
  ?>

  <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" data-bs-toggle="dropdown">
    <span class="fi <?php echo $flag_class; ?> me-2"></span>
    <span><?php echo $lang_text; ?></span>
  </a>

  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="?lang=en">English</a></li>
    <li><a class="dropdown-item" href="?lang=zh">中文</a></li>
    <li><a class="dropdown-item" href="?lang=fr">Français</a></li>
  </ul>
</li>
        <li class="nav-item ms-3"><button id="themeToggle" class="btn btn-outline-light"><i class="fa fa-moon"></i></button></li>
      </ul>
    </nav>
  </div>
</header>
