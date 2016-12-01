<?= $this->assign('title','Artistes'); ?>
<html>
	<head>

	</head>
	<body>
		<section>
			<?php print_r($artists); ?>
			<?php foreach ($artists as $artist) { ?>
			<table style="width:100%; text-align: left;">
			   	<tr>
			        <th>Nom</th>
			        <th>Prénom</th>
			        <th>Surnom</th>
			        <th>Nom de scène</th>
			        <th>Date de naissance</th>
			        <th>Date de déces</th>
			    </tr> 

			    <tr>
			        <td><?php echo $artist['Artist']['artLastName']; ?></td>
			        <td><?php echo $artist['Artist']['artFirstName']; ?></td>
			        <td><?php echo $artist['Artist']['artNickname']; ?></td>
			        <td><?php echo $artist['Artist']['artStageName']; ?></td>
			        <td><?php echo $artist['Artist']['artBirthDate']; ?></td>
			        <td><?php if($artist['Artist']['artDateDeath'] == "")
			        	{
			        			echo 'Vivant';
			        	}
			        	else
			        	{
			        			echo $artist['Artist']['artDateDeath'];
			        	}
			        	?></td>
			    </tr>
			<?php } ?>
		</section>
	</body>
</html>