<?php
  $page = "works";
  require_once("page_start.php");
?>

<h2 class="page-content-title">PUBLISHED WORKS</h2>
<p>Books and articles by Neil Shapiro. The articles are available to read on this website and the books may be purchased directly from Neil Shapiro or from the International Match Safe Association (<a target="_blank" href="http://www.matchsafe.org">http://www.matchsafe.org</a>).</p>
<p style="margin-bottom:30px;"><small><strong>ALL RIGHTS FOR COMMERCIAL USE ARE RESERVED. PERMISSION FOR NON-COMMERCIAL USE MAY BE OBTAINED BY CONTACTING NEIL SHAPIRO</strong></small></p>
<hr>
<h2 class="page-content-title">ARTICLES</h2>

  <?php
    $articles = json_decode(file_get_contents("articles.json"));
    for ($x = 0; $x < count($articles); $x += 3) {
      echo '<div class="row article-content text-left">';
      for ($y = $x; $y < $x+3; $y++) {
        if ($y >= count($articles))
          break;
        echo '<div class="col-md-4">
                <a target="_blank" href="articles/' . $articles[$y]->link . '">' . $articles[$y]->title . '</a>
              </div>';
      }
      echo '</div>';
    }
  ?>

<hr>
<h2 class="page-content-title">BOOKS</h2>
<div class="book-slider">

  <?php
    $books = json_decode(file_get_contents("books.json"));
    for ($x = 0; $x < count($books); $x++) {
      echo '<div class="card slide">
              <img class="img-fluid mx-auto" src="img/books/' . $books[$x]->img . '" alt="Book ' . $x . '">
                <div class="card-body">
                  <h6 class="card-title">' . $books[$x]->title . '</h6>
                  <p class="card-text">' . $books[$x]->desc . '</p>
                </div>';

      if ($books[$x]->link !== "#") {
        echo '<a target="_blank" href="books/' . $books[$x]->link . '" class="btn btn-primary">Read More</a>';
      }
      echo '</div>';
    }
  ?>

</div>
<hr>
<h2 class="page-content-title">BOOK REVIEWS</h2>
<div class="row" style="margin-bottom: 20px;">
  <div class="col-md-6">
    <a target="_blank" href="reviews/EXCEPTIONAL MATCH SAFES BOOK REVIEW.pdf">Exceptional Match Safes Book Review</a>
    <p><i>Silver Magazine</i></p>
  </div>
  <div class="col-md-6">
    <a target="_blank" href="reviews/GORHAM MATCH SAFES BOOK REVIEW.pdf">Gorham Match Safes Book Review</a>
    <p><i>Silver Magazine</i></p>
  </div>
</div>

<?php
  require_once("page_end.php")
?>
