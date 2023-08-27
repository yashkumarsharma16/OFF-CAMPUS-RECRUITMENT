 if(isset($_POST['name']) && $_POST['name']=="TOTAL PLACED STUDENTS") {
                     
               	 $sql = "SELECT * FROM students as S,applications as A,vacancy as V where S.email=A.s_mail and A.job_id=V.job_id and A.status=1 ";
                $result = $conn->query($sql);
	 			

                   echo "<h4 align=\"center\">PLACED STUDENTS</h4>";
				   echo "<br>";
             if ($result->num_rows > 0) {
                 echo "<table class=\"table table-hover\"><tr><th>Name</th><th>Email</th><th>Contact No.</th><th>Degree</th><th>Branch</th><th>C.P.I.</th><th>12th Percentage</th><th>10th Percentage</th><th>Company</th><th>Job Title</th><th>Salary (LPA)</th><th>Location</th></tr>";
     
               while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["phone"]."</td><td>".$row["degree"]."</td><td> ".$row["branch"]."</td><td>".$row["cpi"]."</td><td>".$row["12p"]."</td><td>".$row["10p"]."</td><td>".$row["company_name"]."</td><td>".$row["job_title"]."</td><td>".$row["salary"]."</td><td>".$row["location"]."</td></tr>";
                    }
              echo "</table>";
         }  else {
            echo "0 results";
               }
				  }
