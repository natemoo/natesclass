<div class="pagetop">
	<h1>Welcome to the Science section</h1>
</div>

<div class="blog">
</div>

<div class="stuff">
<h2>Santa Fe River</h2>
	<p>Here are links to our Santa Fe River project.</p>
	<ul>
		<li><a href="http://watershedwiser.org/santa-fe-river-blm-la-cieneguilla-grant" target="_blank">Watershed Wiser - Data students have collected about water quality is uploaded here.</a></li>
		<li><a href="https://www.inaturalist.org/projects/sfsas-river-warriors" target="_blank">iNaturalist - Organisms that we have documented on the property.</a></li>

<!-- iNaturalist Widget -->
				<style type="text/css" media="screen">
				.inat-widget {font-family: Georgia, serif; padding: 10px; margin: 10px; line-height: 1; border:2px solid black;}
				.inat-widget-header {margin-bottom: 10px;}
				.inat-widget td {vertical-align: top; padding-bottom: 10px;}
				.inat-label { color: #888; }
				.inat-meta { font-size: smaller; margin-top: 3px; line-height: 1.2;}
				.inat-observation-body, .inat-user-body { padding-left: 10px; }
				.inat-observation-image {text-align: center;}
				.inat-observation-image, .inat-user-image { width: 48px; display: inline-block; }
				.inat-observation-image img, .inat-user-image img { max-width: 48px; }
				.inat-observation-image img { vertical-align: middle; }
				.inat-widget-small .inat-observation-image { display:block; float: left; margin: 0 3px 3px 0; height:48px;}
				.inat-label, .inat-value, .inat-user { font-family: "Trebuchet MS", Arial, sans-serif; }
				.inat-user-body {vertical-align: middle;}
				.inat-widget td.inat-user-body {vertical-align: middle;}
				.inat-widget .inat-footer td.inat-value {vertical-align: middle; padding-left: 10px;}
				</style>
				<div class="inat-widget">
				    <div class="inat-widget-header">
				      <a href="https://www.inaturalist.org"><img alt="iNaturalist.org" src="https://www.inaturalist.org/assets/logo-small-9571bdf43f2c4dc05eb536a8c06d7c4b.gif" /></a>  
				    </div>
				  <script type="text/javascript" charset="utf-8" src="https://www.inaturalist.org/observations/project/27659.widget?layout=small&limit=5&order=desc&order_by=observed_on"></script>
				  <table class="inat-footer">
				    <tr class="inat-user">
				      <td class="inat-value">
				        <strong>
				            <a href="https://www.inaturalist.org/observations/project/27659">View more observations from SFSAS River Warriors on <nobr>iNaturalist.org »</nobr></a>
				        </strong>
				      </td>
				    </tr>
				  </table>
				</div>


		<li><a href="https://picturepost.unh.edu/analyze/post.jsp?postId=1475" target="_blank">Picture Post - A citizen science project by UNH that collects phenology data through picture sets.</a></li>
	</ul>
<h2>Student Work</h2>
	<ul>
		<li><a href="https://docs.google.com/presentation/d/1DgkE_gZT67VNJGJUYfhVei6g3oly4hnuvvTfkTEEUyE/edit?usp=sharing" target="_blank">12 Things You Can Do in Google Classroom, created by SFSAS 8th Grade, 2018-2019</a></li>
	</ul>
</div>

<!-- <div class="topiclist">
	<p>Enjoy the resources below!</p>
	<h2>Topics</h2>
		<ul><a href="#gens"><li>General Science</li></a>
		<a href="#bio"><li>Biology/Life Science</li></a>
		<a href="#chem"><li>Chemistry</li></a>
		<a href="#phys"><li>Physics</li></a>
		</ul>
</div>
-->

<div class="links">
<h2>Science Links</h2>
	<?php
	require_once('Includes/dbconnect.php');

	$query = 'SELECT * FROM links WHERE Type="Link" and Category="Science" ORDER BY Subcategory';

	$result = mysqli_query($connection,$query);

	$heading = null;
	echo "<ul>\n";
	while ($row = mysqli_fetch_assoc($result)){
		if ($row['Subcategory'] != $heading){
			if ($heading) {
				echo '</ul></div><br />';
			}
			echo '<div class="topic" id="' . $row['Subcategory'] . '"><h3>' . $row['Subcategory'] . ' Links</h3>';
			echo '<ul><br />';
			$heading = $row['Subcategory'];
		}
		echo '<li>' . '<div class="collapsible">' . $row['Title'] . '</div><br/>
		<a href="' . $row['Link'] . '" target="_blank">' . $row['Link'] . '</a>
		<div class="content"><p>' . $row['Description'] . '</p></div></li><br />';
	}
	if ($heading) {
		echo '</li><br />';
	}
	echo '</ul><br />';

	mysqli_free_result($result);

	mysqli_close($connection);
	?>
	
</div>