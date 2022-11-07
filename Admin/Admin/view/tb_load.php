<!DOCTYPE html>  
 <html>  
      <head>  
        <title></title>  
          
          <style type="text/css">
               table, tr, td,th{
                    border: 1px solid blueviolet;
               }
          </style>
      </head>  
      <body>  
          <div align='center'><b><font color='red'><h2>MEMBERS LIST</h2></font>
        <div>              
                <div> 
                     <table>  
                          <tr>  
                               <th>Name</th> 
                               <th>E-mail</th>  
                               <th>User name</th>   
                               <th>Gender</th>   
                               <th>Date of birth</th>   
                          </tr>  
                          <?php   
                          $data = file_get_contents("../data/users.json");  
                          $data = json_decode($data, true);
                          foreach($data as $row)  
                          {  
                             
                                   echo '<tr>
                               <td>'.$row["name"].'</td>
                               <td>'.$row["email"].'</td>
                               <td>'.$row["username"].'</td>
                               <td>'.$row["gender"].'</td>
                               <td>'.$row["dob"].'</td>
                               </tr>'; 
                              }
                                
                           
                          ?>  
                     </table>   
            <h4><a href="package_details.php" class="btn btn-secondary">Back</a></h4>
                   </div>
                 </div></div>
      </body>  
 </html>  