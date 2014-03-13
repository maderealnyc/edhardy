<?php
/*
Template Name: Homepage Layout 1
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

						<div id="main" class="eightcol first clearfix" role="main">

							<h1>Homepage (Layout 1)</h1>

							<style type="text/css">
							.grid {
							    width: 1000px;
							    height: 1000px;
							    margin: 0px 0px;
							    border: 0px;
							    clear: both;
							}

							.grid > div {
							    background-color: white;
							    position: absolute;
							}

							.dev-tile-number, .dev-tile-size {
							    font-size: 36px;
							    padding: 10px;
							}

							.dev-tiles-templates ul {
							    margin-bottom: 10px;
							}

							.dev-template {
							    margin-right: 20px;
							    height: 35px;
							    display: inline-block;
							    background: url(/wp-content/themes/edhardy/library/images/tilesjs/tiles-sprite.png) no-repeat;
							    cursor: pointer;
							}

							.dev-template.selected {
							    background-position-y: -200px;
							}

							.dev-l1 {
							    width: 47px;
							}

							.dev-l2 {
							    width: 47px;
							    background-position-x: -68px;
							}

							.dev-l3 {
							    width: 39px;
							    background-position-x: -135px;
							}

							.dev-l4 {
							    width: 39px;
							    background-position-x: -194px;
							}

							.dev-l5 {
							    width: 47px;
							    background-position-x: -245px;
							    margin-right: 0px;
							}
							</style>
							<script src="/wp-content/themes/edhardy/library/js/homepage-layout1-tiles.js"></script>
							<div id="homepage-layout1-templates" class="dev-tiles-templates">
							    <ul>
							        <li id="homepage-layout1-t1" class="dev-l1 selected dev-template"></li>
							        <li class="dev-l2 dev-template"></li>
							        <li class="dev-l3 dev-template"></li>
							        <li class="dev-l4 dev-template"></li>
							        <li class="dev-l5 dev-template"></li>
							    </ul>
							</div>
							<br style="clear:both;"/>
							<div id="homepage-layout1-grid" class="grid"></div>

						</div>

				</div>

			</div>

<?php get_footer(); ?>
