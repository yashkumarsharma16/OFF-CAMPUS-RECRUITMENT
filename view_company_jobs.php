<div class="well row" style="background-color: #AED4F1 ; height:auto;">
						<h3> Company jobs </h3>
						<?php
							
							$servername="localhost:3308";
							$username="";
							$password="";
							$dbname="project";
												
							$conn = new mysqli($servername,$username,$password,$dbname);
							if (!$conn) {
								die('Could not connect: ' . mysqli_error($conn));
							}

							$sql="SELECT * FROM vacancy WHERE company_name = '".$_SESSION['name']."'";
							$result = $conn->query($sql);



							echo "<div class=\"table-responsive table-bordered\" >            
											  <table class=\"table table-hover\">
											  <tr>
											   <th> Job Id </th>
											   <th>Job Title</th>
											   <th>Location</th>
											   <th>Deadline</th>
											   <th>Cgpa</th>
											   <th>Salary</th>
											   <th>Age</th>
											   </tr>
											   ";
											   
										while($row = $result->fetch_assoc()){	   
												echo "<form action=\"deleteVacancy.php\" method=\"POST\">";
												echo		   "
											   <tr>
											   <td>".$row['job_id']."</td>
											   <td>".$row['job_title']."</td>
											   <td>".$row['location']."</td>
											   <td>".$row['deadline']."</td>
											   <td>".$row['cgpa']."</td>
											   <td>".$row['salary']."</td>
											   <td>".$row['age'].""
											     
											   ;
												echo " <button type=\"submit\">X</button> </td>";
											   echo "</tr>";
											   echo "</form>";
										}	
										
										echo	   "
											   </table>
											   </div>";		

						?>
