<?php

namespace Remoji;

require_once(__DIR__ . "/../include/init.php");

Page::setTitle("Home");
require_once(__DIR__ . "/../include/header.php"); ?>

<h1>
  <em>The</em> all-in-one Discord bot for emojis.
</h1>

<p>
  Remoji is a super-simple but super-powerful emote manager bot for Discord. Among other features, Remoji allows you to steal copy or upload emotes to your server from directly in Discord, even on mobile!
</p>

<p>
  Remoji uses Slash Commands! Just type <code>/</code> and you should see all the Remoji commands in one place!
</p>


<h4>What are you waiting for?</h4>

<a href="/invite" target="_blank" rel="noopener noreferrer"><button class="primary" style="font-size: 1.5rem">Add to Discord</button></a>
<a href="/vote" target="_blank" rel="noopener noreferrer"><button class="info outline" style="font-size: 1.5rem">Vote</button></a>

<h4>Need help?</h4>
<a href="/support" target="_blank" rel="noopener noreferrer">Join the support server</a>.

<?php
require_once(__DIR__ . "/../include/footer.php");
