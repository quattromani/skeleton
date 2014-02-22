<span id="breadcrumbs-anchor" class="h2 jumpTo-anchor">Breadcrumbs</span>
<a class="btn vs right" href="#">View Source</a>
<div class="box-column clear">

  <div class="horizontal slashes">
    <ul>
  <?php
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
