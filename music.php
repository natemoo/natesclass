<div class="pagetop">
	<h1>Welcome to the Music section</h1>
</div>

<div class="blog">
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
	<?php
	require_once('Includes/dbconnect.php');

	$query = 'SELECT * FROM links WHERE Category="Music" ORDER BY Subcategory';

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