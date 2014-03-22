<style>
.flex-container {
  display: -webkit-box;
  display: -moz-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
}

.flex-item {
	flex: 1;
  text-align: center;
  color: #fff;
}
.lorem {
	font-size: 16px;
}

  .one { flex: 1; }
  .two { flex: 2; }
  .three { flex: 3; }
  .five { flex: 5; }
  .eight { flex: 8; }
  .thirteen { flex: 12; }
  .twentyone { flex: 21; }

</style>

<span id="flexbox-anchor" class="h2 jumpTo-anchor">Flexbox</span>

<div class="right">
  <a class="btn" href="flexbox">Isolate</a>
  <a class="btn btn-primary vs" href="#">View Source</a>
</div>

<div class="box-column clear">
	<ul class="flex-container">
	  <li class="flex-item one color-primary-red">1</li>
    <li class="flex-item one color-primary-green">1</li>
	  <li class="flex-item two color-primary-blue">2</li>
	  <li class="flex-item three color-secondary-red">3</li>
    <li class="flex-item five color-secondary-green">5</li>
    <li class="flex-item eight color-secondary-blue">8</li>
    <li class="flex-item thirteen color-primary-red">13</li>
    <li class="flex-item twentyone color-primary-green">21</li>
	</ul>
</div>