<?php

namespace Remoji;

require_once(__DIR__ . "/../../vendor/autoload.php");

session_start();

function escape_html(string $str): string
{
  return htmlspecialchars($str, ENT_HTML5 | ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8");
}

class Page
{
  private static string $title = "";
  private static string $description = "";

  public static function setTitle(string $title): void
  {
    static::$title = $title;
  }

  public static function getTitle(): string
  {
    return static::$title ? (static::$title . " | Remoji") : "Remoji";
  }


  public static function setDescription(string $description): void
  {
    static::$description = $description;
  }

  public static function getDescription(): string
  {
    return static::$description ?: "A super-simple but super-powerful Discord emoji bot that lets you copy or upload emotes right from Discord, even on mobile!";
  }
}

function die_redirect(string $url, int $status = 302) // re-die-rect
{
  http_response_code($status);
  header("Location: $url");
  die("This page has been moved to: $url");
}
