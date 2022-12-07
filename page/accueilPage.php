<?php
include('template/head.php');
include('template/menu.php');
?>
<article>
	<header><?php echo $titrePage;?> </header>
	<div>
		<p><strong><?php echo $nbSalles;?> salles</strong> sont à votre disposition pour réservation.</p>
        <p>Vos réservations d'aujourd'hui :</p>
		<p>Vos prochaines réservations :</p>
        <p>Vos anciennes réservations :</p>
	</div>
</article>
<?php 
include('template/footer.php'); 
?>
