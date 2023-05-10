<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <?php
// Fonction pour détecter le thème du navigateur
function detecter_theme_navigateur() {
  if (strpos($_SERVER['HTTP_USER_AGENT'], 'Mozilla/5.0 (Android 10; Mobile; rv:85.0) Gecko/85.0 Firefox/85.0') !== false) {
    return 'clair'; // Thème clair pour Firefox sur Android
  } elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'Mozilla/5.0 (Android 10; Mobile; rv:85.0) Gecko/85.0') !== false) {
    return 'sombre'; // Thème sombre pour Firefox sur Android
  } elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'Safari') !== false) {
    if (strpos($_SERVER['HTTP_USER_AGENT'], 'Macintosh') !== false) {
      return 'clair'; // Thème clair pour Safari sur macOS
    } elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'iPhone') !== false || strpos($_SERVER['HTTP_USER_AGENT'], 'iPad') !== false) {
      return 'sombre'; // Thème sombre pour Safari sur iOS
    }
  }
  return 'clair'; // Par défaut, utiliser le favicon pour le thème clair
}

// Déterminer le nom de fichier du favicon en fonction du thème
$theme = detecter_theme_navigateur();
$favicon = ($theme == 'sombre') ? '/Illustration/Favicon/favicon_sombre.ico' : '/Illustration/Favicon/favicon_clair.ico';

// Définir le favicon
echo '<link rel="shortcut icon" href="'.$favicon.'" type="image/x-icon">';
?>

    <link rel="stylesheet" href="styles/main.css">
</head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>

<body>
  <div style='display:flex'>
  <!--logo header -->
  <img id=logo-header src="Illustration/Logo/Harbor.svg" alt="Logo Harbor Cleaner">
    <h1 id=titre-header>Harbor Cleaner</h1>
</div>
<!-- NavBar -->
  <header>
      <nav class="navbar">
          <ul>
              <li><a href="index.php">Accueil</a></li>
              <li><a href="#projet">Notre projet</a></li>
              <li><a href="#chiffres">Chiffres clés</a></li>
              <li><a href="dashboard.php">Dashboard</a></li>
          </ul>
      </nav>
  </header>
