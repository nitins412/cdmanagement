<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>CD Management</title>

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600"
	rel="stylesheet" type="text/css">

<!-- Styles -->
<style type="text/css">
html, body {
	background-color: #fff;
	color: #636b6f;
	font-family: 'Raleway', sans-serif;
	font-weight: 100;
	height: 100vh;
	margin: 0;
}

.full-height {
	height: 50vh;
}

.flex-center {
	align-items: center;
	display: flex;
	justify-content: center;
}

.position-ref {
	position: relative;
}

.content {
	text-align: center;
}

.title {
	font-size: 20px;
}

.links>a {
	color: #636b6f;
	padding: 0 25px;
	font-size: 12px;
	font-weight: 600;
	letter-spacing: .1rem;
	text-decoration: none;
	text-transform: uppercase;
}

.Table {
	display: table;
}

.Title {
	display: table-caption;
	text-align: center;
	font-weight: bold;
	font-size: larger;
}

.Heading {
	display: table-row;
	font-weight: bold;
	text-align: center;
}

.Row {
	display: table-row;
}

.Cell {
	display: table-cell;
	border: solid;
	border-width: thin;
	padding-left: 5px;
	padding-right: 5px;
}
</style>
</head>
<body>
	<div class="flex-center position-ref full-height">
		<div class="content">
			<div class="title m-b-md">
				<div class="Table">
					<div class="Title">
						<p>CD Management</p>
					</div>
					<div class="Heading">
						<div class="Cell">
							<p>Title</p>
						</div>
						<div class="Cell">
							<p>Artist(s)</p>
						</div>
						<div class="Cell">
							<p>Number of Track</p>
						</div>
						<div class="Cell">
							<p>Total Playing Time</p>
						</div>
						<div class="Cell">
							<p>Year of Release</p>
						</div>
					</div>				    
				    <?php foreach($cd as $cdInfo): ?>
				    <div class="Row">
						<div class="Cell">
							<p>
								<a title="CD Detail"
									href="cddetail/track_id/<?php echo $cdInfo->cd_id?>"><?php echo $cdInfo->cd_title?></a>
							</p>
						</div>
						<div class="Cell">
							<p><?php echo $cdInfo->artist?></p>
						</div>
						<div class="Cell">
							<p><?php echo $cdInfo->total_tracks?></p>
						</div>
						<div class="Cell">
							<p><?php echo $cdInfo->play_time?></p>
						</div>
						<div class="Cell">
							<p><?php echo $cdInfo->year_release?></p>
						</div>
					</div>
				     <?php endforeach;?>				    
				</div>
			</div>

			<!--  <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div> -->

		</div>
	</div>
</body>
</html>
