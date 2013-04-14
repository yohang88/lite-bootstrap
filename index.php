<?php
get_header();
?>

<div class="container-narrow">

	<div class="masthead">
		<ul class="nav nav-pills pull-right">
			<li class="active"><a href="#">Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Contact</a></li>
		</ul>
		<h3 class="muted">My Website Name</h3>
	</div>

	<hr>

	<div class="jumbotron">
		<img src="/loremphoto/timthumb.php?h=422&w=700&src=/loremphoto/photo/header.jpg" />
	</div>

	<hr>

	<ul class="breadcrumb">
	  <li><a href="#">Home</a> <span class="divider">/</span></li>
	  <li><a href="#">Library</a> <span class="divider">/</span></li>
	  <li class="active">Data</li>
	</ul>

	<?php
	$m = 1;
	?>
	<div class="row-fluid">
		<?php while($m <= 6): ?>
		<div class="span6">
			<img src="/loremphoto/timthumb.php?h=150&w=350&src=/loremphoto/photo/<?php echo rand(1,6) ?>.jpg" />
			<h4><a href="#">Subheading <?php echo $m ?></a></h4>
			<p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>
		</div>
		<?php $m++; ?>
	<?php endwhile; ?>
</div>

<div class="row-fluid">
	<div class="span12">
		<ul class="pager">
			<li class="previous">
				<a href="#">&larr; Older</a>
			</li>
			<li class="next">
				<a href="#">Newer &rarr;</a>
			</li>
		</ul>
	</div>
</div>

<hr>

<div class="footer">
	<p>&copy; Company 2013</p>
</div>

</div> <!-- /container -->

<?php get_footer(); ?>