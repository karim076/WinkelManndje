<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="../styles/table.css">
  <?php require_once '../head.php' ?>
</head>
<body>
    <header>
        <?php require_once '../header.php' ?>
    </header>
    <?php
        require_once '../backend/conn.php';
    /*<!-- Ophinbehandeling -->*/
        $query = "SELECT * FROM orders WHERE status = 1";
        $statement = $conn->prepare($query);
        $statement->execute();
        $todo = $statement->fetchAll(PDO::FETCH_ASSOC);

    /*<!-- Ophalen -->*/
        $query = "SELECT * FROM orders WHERE status = 2";
        $statement = $conn->prepare($query);
        $statement->execute();
        $progress = $statement->fetchAll(PDO::FETCH_ASSOC);
    /*<!-- Verzonden -->*/

        $query = "SELECT * FROM orders WHERE status = 3";
        $statement = $conn->prepare($query);
        $statement->execute();
        $done = $statement->fetchAll(PDO::FETCH_ASSOC);
        // var_dump($todo);
    ?>
    <main>
		<div class="">
			<div class="todo">                                                          
				<h1>Inbehandeling</h1>
				<div class="table scroll tableFixHead">
					<table>
						<thead>
				        	<tr class="solid">    
								<th>status</th>
								<th>Product naam</th>
								<th>Aantallen</th>
								<th>Order_email</th>
								<th>Order_number</th>
								<th>Order aanpassen</th>
				          	</tr>
			            </thead>
			            <?php foreach($todo as $taken): ?>
						<?php 
						$product = json_decode($taken['product'], true); 
						$amount = $product['amount'];
						$id_Product = $product['id'];
						
						$query = "SELECT name FROM products WHERE id = $id_Product";
						$statement = $conn->prepare($query);
						$statement->execute();
						$name = $statement->fetch(PDO::FETCH_ASSOC);
						$productNaam = $name['name'];
						?>
			            <tbody>			                
                  		<tr>
							  <!-- <//?php $id = $taken['id'] ?> -->
								<?php
									if($taken['status'] == 1):?>
										<td><?php echo "Inbehandeling"; ?></td>									
								<?php endif;?>
							
			                <!-- <td><//?php //echo $taken['status']; ?></td> -->
							<td><?php echo $productNaam; ?></td>
							<td><?php echo $amount; ?></td>
							<td><?php echo $taken['email_recipient']; ?></td>
			                <td><?php echo $taken['order_number']; ?></td>
			                <form method="POST" action="edit.php">
				                <td><input type="submit" class="admin_edit" value="Aanpassen"></td>
								<input type="hidden" name="id" value="<?php echo $taken['id'];?>">
							</form>
			            </tr>
			            </tbody>
	            		<?php endforeach; ?>
	        		</table>
				</div>
			</div>
			<div class="progress">
				<h1>Ophalen</h1>
				<div class="table scroll tableFixHead">
					<table>
						<thead>
							<tr class="solid">
								<th>Status</th>
								<th>Product naam</th>
								<th>Aantallen</th>
								<th>Order_email</th>
								<th>Order_number</th>
								<th>Order aanpassen</th>
							</tr>
				        </thead>
			            <?php foreach($progress as $taken): ?>
							<?php 
							$product = json_decode($taken['product'], true); 
							$amount = $product['amount'];
							$id_Product = $product['id'];
							
							$query = "SELECT name FROM products WHERE id = $id_Product";
							$statement = $conn->prepare($query);
							$statement->execute();
							$name = $statement->fetch(PDO::FETCH_ASSOC);
							$productNaam = $name['name'];
							?>
			            	<tbody>
				                <tr>
									<?php
										if($taken['status'] == 2):?>
											<td><?php echo "Ophalen"; ?></td>									
									<?php endif;?>

				                    <!-- <td><//?php echo $doing['status']; ?></td> -->
									<td><?php echo $productNaam; ?></td>
									<td><?php echo $amount; ?></td>
				                    <td><?php echo $taken['email_recipient']; ?></td>
									<td><?php echo $taken['order_number']; ?></td>
									<form method="POST" action="edit.php">
				                    	<td><input type="submit" class="admin_edit" value="Aanpassen"></td>
										<input type="hidden" name="id" value="<?php echo $taken['id'];?>">
									</form>
				                </tr>
				            </tbody>
	            		<?php endforeach; ?>
	        		</table>
				</div>
			</div>
			<div class="done">
				<h1>Verzonden</h1>
				<div class="table scroll tableFixHead">
					<table>
						<thead>
							<tr>
								<th>Email</th>
								<th>Product naam</th>
								<th>Aantallen</th>
								<th>Order_email</th>
								<th>Order_number</th>
								<th>Order aanpassen</th>
							</tr>
			            </thead>
			            <?php foreach($done as $taken): ?>
							<?php 
							$product = json_decode($taken['product'], true); 
							$amount = $product['amount'];
							$id_Product = $product['id'];
						
							$query = "SELECT name FROM products WHERE id = $id_Product";
							$statement = $conn->prepare($query);
							$statement->execute();
							$name = $statement->fetch(PDO::FETCH_ASSOC);
							$productNaam = $name['name'];
							?>
			            	<tbody>
				                <tr>
									<?php
										if($taken['status'] == 3):?>
											<td><?php echo "Verzonden"; ?></td>									
										<?php endif;?>
				                    <!-- <td><//?php echo $klaar['status']; ?></td> -->
									<td><?php echo $productNaam; ?></td>
									<td><?php echo $amount; ?></td>
				                    <td><?php echo $taken['email_recipient']; ?></td>
									<td><?php echo $taken['order_number']; ?></td>
									<form method="POST" action="edit.php">
										<td><input type="submit" class="admin_edit" value="Aanpassen"></td>
										<input type="hidden" name="id" value="<?php echo $taken['id'];?>">
									</form>
				                </tr>
				            </tbody>
	            		<?php endforeach; ?>
	        		</table>
				</div>
			</div>
		</div>
	</main>
  <footer>
  </footer>
</body>
</html>