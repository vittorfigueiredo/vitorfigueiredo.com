<?php $this->layout("master", ["title" => $title]) ?>

<link rel="stylesheet" href="/assets/css/article.css">

<class class="title">
  <h1><?=$this->e($article["title"]) ? $this->e($article["title"]) : "Lorem ipsum dolor, sit amet consectetur adipisicing elit."?></h1>
</class>
<div class="post-info">
  <div class="author">
    <h6>Por Vitor Figueiredo, <?=$this->e($article["createdAt"]) ? date_format(new DateTime($this->e($article["createdAt"])), 'd/m/Y') : "06 Jan 2023" ?></h6>
  </div>
</div>
<!-- <div class="tags">
  <a href="#">PHP</a>
</div> -->

<div class="content">
  <?php
    use Parsedown;
    use app\helpers\Uri;

    $name = addslashes(str_replace("name=", "", Uri::get("query")));

    $article = file_get_contents("articles/$name.md");

    if (!$article) {
      header("Location: /ArticleNotFound");
    }

    $parser = new Parsedown();
    echo $parser->text($article);
  ?>
</div>

<div id="comments-section" class="mt-5">
  <div id="disqus_recommendations"></div>
  <div id="disqus_thread"></div>
</div>

<script>
(function() { // REQUIRED CONFIGURATION VARIABLE: EDIT THE SHORTNAME BELOW
var d = document, s = d.createElement('script'); // IMPORTANT: Replace EXAMPLE with your forum shortname!
s.src = 'https://vitor-figueiredo.disqus.com/recommendations.js'; s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>
Please enable JavaScript to view the
<a href="https://disqus.com/?ref_noscript" rel="nofollow">
comments powered by Disqus.
</a>
</noscript>

<script>
    /**
    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
    /*
    var disqus_config = function () {
    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://vitor-figueiredo.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/highlight.min.js"></script>
<script>hljs.highlightAll()</script>
