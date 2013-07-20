<?php
$page_title = "Second page";

$as_json = false;
if (isset($_GET["view_as"]) && $_GET["view_as"] == "json") {
  $as_json = true;
  ob_start();
} else {
  ?>
  <!doctype html>
  <html>
  <head>
    <?php
    include "include/header.php";
    echo "<title>" . $page_title . "</title>";
    ?>
  </head>

  <body>

  <?php include "include/before_content.php"; ?>

  <p>This paragraph is shown only when the navigation starts from <strong>second_page.php</strong>.</p>

  <div id="ajax-content">
<?php } ?>

  <p>This is the content of <strong>second_page.php</strong>.</p>

<?php
if ($as_json) {
  echo json_encode(array("page" => $page_title, "content" => ob_get_clean()));
} else {
  ?>
  </div>

  <p>This paragraph is shown only when the navigation starts from <strong>second_page.php</strong>.</p>

  <?php
  include "include/after_content.php";
  echo "</body>\n</html>";
}
