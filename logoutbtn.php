<!doctype html>

<head>
	<style>



		.log a {
			text-decoration: none;
		}

		.profile-wrapper {
			width: 200px;
			float: right;
			margin: 50px auto;
			list-style: none;
			padding: 0;
			margin: 0;
		}

		.profile-wrapper::after {
			content: '';
			position: absolute;
			top: 20px;
			right: 10px;
			border-color: #333 transparent transparent;
			border-width: 6px;
			border-style: solid;
		}

		.profile-wrapper::before {
			content: '';
			position: absolute;
			top: 20px;
			right: 10px;
			border-color: #eee transparent transparent;
			border-width: 6px;
			border-style: solid;
		}

		.profile-wrapper:hover::after {
			border-color: #111 transparent transparent;
		}

		.profile {
			padding: 10px;
			border: 1px solid #000;
			border-radius: 3px;
			box-shadow: 0 1px 0 #555 inset, 0 1px 7px #111;
			background: -webkit-linear-gradient(#222, #111);
		}

		.profile:hover {
			cursor: pointer;
			background: -webkit-linear-gradient(#1f1f1f, #0a0a0a);
		}

		.profile .name {
			font-size: 12px;
			color: #fff;
			line-height: 26px;
			margin-left: 10px;
		}

		.profile .name:hover {
			color: #0088cc;
		}

		.profile img {
			width: 25px;
			display: inline;
			float: left;
			border: 1px solid #111;
			border-radius: 3px;
			box-shadow: 0 0 3px rgba(0, 0, 0, 0.5) inset;
		}

		/* hide menu */
		.menu {
			display: none;
			clear: both;
			margin: 20px 0 0 0;
		}

		.menu li {
			font-size: 12px;
			margin: 0;
			padding: 10px 4px;
		}

		.menu li a {
			color: #555;
		}

		.menu li:hover>a {
			color: #eee;
		}

		.menu li:hover {
			border-left: 1px solid #111;
			border-right: 1px solid #222;
			border-bottom: 1px solid #222;
			border-top: 1px solid #111;
			border-radius: 3px;
		}

		/* hover profile show menu */
		.profile:hover .menu {
			display: block;
		}
	</style>
</head>

<body>
	<ul class="profile-wrapper">
		<li>
			<!-- user profile -->
			<div class="profile">
				<?php
				include "fconnection.php";

				$user1 = $_SESSION['n'];
				$name1=$_SESSION['name'];
				$sql = "select dp from mp where username='$user1'";
				$result = $con->query($sql);
				$row = $result->fetch_assoc();
				$dp = $row['dp'];
				echo "
					<img src='images/$dp'>
					<div class='log'><a href='test.php' class='name'>$name1</a><div>
					
					<!-- more menu -->
					<ul class='menu'>
						<li><a href='settings.php'>Account Settings</a></li>
						<li><a href='logout.php'>Log out</a></li>
					</ul>

				</div>
			</li>
		</ul>";
				?>

</body>

</html>