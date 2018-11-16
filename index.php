<?php
  $page = "gallery";
  require_once("page_start.php");
?>

<h2 class="page-content-title">GALLERY</h2>
<h6 class="page-content-title">Selected match safes and match holders from worldwide collections.</h6>
<div class="row">
  <div class="col-md-12">
    <div id="gallery">

      <?php
        $captions = json_decode(file_get_contents("gallery_captions.json"));
        foreach ($captions as $num => $caption) {
          echo "<div>
                  <img class='img-fluid mx-auto' src='img/gallery/tinified/$num.png' alt='Slide $num'>
                  <div class='caption'>
                    $caption
                  </div>
                </div>";
        }
      ?>

    </div>
  </div>
</div>

<?php
  require_once("page_end.php");
?>
