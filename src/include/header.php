<?php

namespace Remoji;

require_once(__DIR__ . "/init.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/styles.css">
  <title><?= escape_html(Page::getTitle()) ?></title>
  <meta name="description" value="<?= escape_html(Page::getDescription()) ?>">
  <meta name="keywords" value="remoji discord bot emojis emoji emotes emote stealer copy simple free">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>

<body>
  <script>
    function betterAlert(message) {
      const el = document.createElement("div");
      el.classList.add("alert-modal");
      el.innerText = message;
      document.body.appendChild(el);
      setTimeout(() => el.remove(), 5000);
    }
  </script>

  <header>
    <nav>
      <a href="/" class="brand">Remoji</a>
      <ul class="navbar">
        <li><a href="/support">Support</a></li>
        <li><a href="/vote">Vote</a></li>
      </ul>
      <div class="navend">
        <a href="/invite"><button class="primary">Invite</button></a>
      </div>
    </nav>
  </header>
  <main>
