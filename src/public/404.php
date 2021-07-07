<?php

namespace Remoji;

require_once(__DIR__ . "/../include/header.php");

$users = [
  ["name" => "Shino", "pronoun" => "he"],
  ["name" => "vcokltfre", "pronoun" => "he"],
];

$user = $users[array_rand($users)]; ?>

<div class="error-page">
  <h1>404</h1>
  <h2><?= escape_html($user["name"]) ?> searched all over, but <?= escape_html($user["pronoun"]) ?> couldn't find the page you're looking for...</h2>

  <a href="/">
    <button class="primary outline" style="font-size:1.5rem">
      Back to Safety!
    </button>
  </a>
</div>

<?php
require_once(__DIR__ . "/../include/footer.php");
