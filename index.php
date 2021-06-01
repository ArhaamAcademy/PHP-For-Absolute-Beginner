<?php include'inc/header.php';?>
<div class="container-fluid">
	<div class="row">

		<?php include'inc/sidebar.php';?>

		<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
			<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
				<h1 class="h2">
					<?php
					if(isset($_GET['lesson'])){
						echo $_GET['lesson'];
					}else{
						echo'Home';
					}
					?>
				</h1>
				
			</div>
			<?php
				if(isset($_GET['lesson'])){
					$lesson = $_GET['lesson'];
					include"practices/$lesson".'.php';
				}else{
					echo 'Welcome';
				}
				?>
		</main>
	</div>
</div>
<?php include'inc/footer.php';?>
