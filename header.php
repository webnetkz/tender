<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Documentation xPWA</title>
  <link rel="icon" type="image/png" href="./logo.png">
  <options-x>
  {
    "coreUi": {
      "theme": "dark",
      "padding": "10px",
      "margin": "5px",
      "radius": "7px",
      "shadow": "none",
      "widthScrollBar": "5px",
      "blur": "7px"
    },
    "colors": {
      "mainTheme": "blue",
      "mainThemeLight": "blue",
      "mainThemeDark": "yellow"
    }
  }
  </options-x>
  <script type="module" src="../xpwa.js" defer></script>
</head>
<body>

  <header-x position="fixed">
    <logo-x src="/logo.png"></logo-x>
    <menu-x>
      <change-theme-x></change-theme-x>
      <button-x link="/index.php">Главная</button-x>
      <button-x link="/quick-start.php">Быстрый старт</button-x>
      <button-x link="/documentation.php">Документация</button-x>
      <button-x link="">Компоненты</button-x>

      <button-x link="/pages/index.php">Components</button-x>
      <button-x onclick="document.body.innerHTML += `<tos-x>Message</tos-x>`">Tos</button-x>
      <button-x onclick="document.body.innerHTML += `<sidebar-x><h1>Content</h1><div><card-3d-x style='color: black'>Card-3D<h2>Hover me</h2></card-3d-x></div></sidebar-x>`">Sidebar</button-x>
    </menu-x>
  </header-x>