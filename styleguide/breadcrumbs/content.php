<?

// header.php variables
  // Page Title
  $title = 'Breadcrumbs';

  // Page Description
  $description = '';

  // Page Specific Keywords
  $keywords = '';

  // page class tag
  $page_class = 'styleguide';

  // Body ID tag
  $body_ID = '';

  // primary breadcrumb
  $breadcrumb_A = 'Home';

  // secondary breadcrumb
  $breadcrumb_B = 'Secondary';

  // secondary breadcrumb
  $breadcrumb_C = 'Tertiary';

// Setup the page

  $footer = true;

  $prototype = true;

    $jumpTo = false;

?>

<span id="breadcrumbs-anchor" class="h2 jumpTo-anchor">Breadcrumbs</span>

<div class="right">
  <a class="btn" href="breadcrumbs">Isolate</a>
  <a class="btn btn-primary vs" href="#">View Source</a>
</div>

<div class="box-column clear">

  <div class="horizontal slashes">
    <ul>
  <?
    if ($breadcrumb_A !='') {
      echo "<li><a href=''>$breadcrumb_A</a></li>";
    }
    if ($breadcrumb_B !='') {
      echo "<li><a href=''>$breadcrumb_B</a></li>";
    }

    if ($breadcrumb_C !='') {
      echo "<li><a href=''>$breadcrumb_C</a></li>";
    }
  ?>
    </ul>
  </div>

<pre class="prettyprint">
&lt;div class="horizontal slashes"&gt;
  &lt;ul&gt;
    &lt;li class="js-first"&gt;
      &lt;a href=""&gt;Home&lt;/a&gt;
    &lt;/li&gt;
    &lt;li&gt;
      &lt;a href=""&gt;Secondary&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class="js-last"&gt;
      &lt;a href=""&gt;Tertiary&lt;/a&gt;
    &lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;
</pre>

</div>
