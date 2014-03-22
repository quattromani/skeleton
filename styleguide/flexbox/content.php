<style>
.flex-container {
  padding: 0;
  margin: 0;
  list-style: none;

  display: -webkit-box;
  display: -moz-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;

  -webkit-flex-flow: row wrap;
  justify-content: space-around;
}

.flex-item {
	overflow: hidden;
  background: tomato;
  padding: 5px;
  width: 33%;
  color: white;
  font-size: 3em;
  text-align: center;
}
.lorem {
	font-size: 16px;
}
@media all and (max-width: 640px) {

  .one { order: 3; }
  .two { order: 1; }
  .three { order: 2; }

}
</style>

<span id="flexbox-anchor" class="h2 jumpTo-anchor">Flexbox</span>

<div class="right">
  <a class="btn" href="flexbox">Isolate</a>
  <a class="btn btn-primary vs" href="#">View Source</a>
</div>

<div class="box-column clear">
	<ul class="flex-container">
	  <li class="flex-item one">1</li>
	  <li class="flex-item two">2</li>
	  <li class="flex-item three">3</li>
	</ul>

	<hr>

	<ul class="flex-container">
	  <li class="flex-item lorem"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, expedita.</span></li>
	  <li class="flex-item lorem"><span>Lorem ipsum dolor sit amet.</span></li>
	  <li class="flex-item lorem"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum odit eaque atque!</span></li>
	</ul>
</div>