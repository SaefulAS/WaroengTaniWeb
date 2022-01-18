<nav class="navbar navbar-default">
			<div class="container" color="blue">
				<ul class="nav nav-pills">
					<li><a href="index.php">Home</a></li>
					<li><a href="keranjang.php">Keranjang</a></li>

					<?php if (isset($_SESSION["pelanggan"])): ?>
					<li><a href="riwayat.php">Riwayat</a></li>
					<li><a href="logout.php">Logout</a></li>

					<?php else: ?>
					<li><a href="login.php">Login</a></li>
					<?php endif ?>
					<li><a href="checkout.php">Checkout</a></li>
					<li><a href="admin/index.php">Admin</a></li>
				<form action="pencarian.php" method="get" class="navbar-form navbar-right">
					<input type="text" class="form-control" name="keyword">
					<button class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></button>
				</form>
				</ul>
			</div>
		</nav>