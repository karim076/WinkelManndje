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
								<th>order_email</th>
								<th>order_number</th>
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
			                <td><a class="admin_edit" href="edit.php?id=<?php echo $taken['id'];?>">Aanpassen</a></td>
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
								<th>#</th>
								<th>status</th>
								<th>product</th>
								<th>order_email</th>
								<th>order_number</th>
								<th>order aanpassen</th>
							</tr>
				        </thead>
			            <?php foreach($progress as $doing): ?>
			            	<tbody>
				                <tr>
				                    <!-- <//?php $id = $doing['id'] ?> -->
									<td><?php echo $doing['id']; ?></td>
									<?php
										if($doing['status'] == 2):?>
											<td><?php echo "Ophalen"; ?></td>									
									<?php endif;?>
				                    <!-- <td><//?php echo $doing['status']; ?></td> -->
									<td><?php echo $doing['product']; ?></td>
									<td><?php echo $doing['email_recipient']; ?></td>
				                    <td><?php echo $doing['order_number']; ?></td>
				                    <td><a class="admin_edit" href="edit.php?id=<?php echo $id;?>">Aanpassen</a></td>
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
								<th>#</th>
								<th>status</th>
								<th>product</th>
								<th>order_email</th>
								<th>order_number</th>
								<th>order aanpassen</th>
							</tr>
			            </thead>
			            <?php foreach($done as $klaar): ?>
			            	<tbody>
				                <tr>
				                    <!-- <//?php $id = $klaar['id'] ?> -->
									<td><?php echo $klaar['id']; ?></td>
									<?php
										if($klaar['status'] == 3):?>
											<td><?php echo "Verzenden"; ?></td>									
										<?php endif;?>
				                    <!-- <td><//?php echo $klaar['status']; ?></td> -->
									<td><?php echo $klaar['product']; ?></td>
									<td><?php echo $klaar['email_recipient']; ?></td>
				                    <td><?php echo $klaar['order_number']; ?></td>
				                    <td><a class="admin_edit" href="edit.php?id=<?php echo $id;?>">Aanpassen</a></td>
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