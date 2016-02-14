      <form action="update_group.php" method="post">
              <?php
              include 'template/connect.php';
              $id=$_GET['p'];
              $sql="select * from groups where id='$id'";
              $data=mysql_query($sql);
              $r=mysql_fetch_array($data);
              {
              ?>
              <table>
	
                  <tr>
                      <td><label>Name:</label></td> 
                      <td><input type="text" name="Name" size="50" value="<?php echo $r['Name']; ?>"> </td> 
                  </tr>
                  
                  <tr>
                      <td><label>Leadership:</label></td> 
                      <td><input type="text" name="Leadership" size="50" value="<?php echo $r['Leadership']; ?>"> </td> 
                  </tr>
		
                  <tr>
                      <td><label>Description: </label></td> 
                      <td><textarea name="Description" rows="5" cols="60" ><?php echo $r['Description']; ?></textarea>
                  </tr>
                  <tr>
                      <td><label>Headline1: </label></td> 
                      <td><input type="text" name="Headline1" value="<?php echo $r['Headline1']; ?>"></td> 
                  </tr>
                  <tr>
                      <td><label>Headeing Content 1: </label></td> 
                      <td><textarea name="H1content" rows="5" cols="60" ><?php echo $r['H1content']; ?></textarea></td> 
                  </tr>
                  <tr>
                      <td><label>Headline2: </label></td> 
                      <td><input type="text" name="Headline2" value="<?php echo $r['Headline2']; ?>"></td> 
                  </tr>
                  <tr>
                      <td><label>Headeing Content 2: </label></td> 
                      <td><textarea name="H2content" rows="5" cols="60" ><?php echo $r['H2content']; ?></textarea></td> 
                  </tr>
                  <tr>
                      <td></td> 
                      <td><input type="hidden" name="update_id" value="<?php echo $id; ?>">
                          <input type="submit" value="Send"> </td> 
                  </tr>
              </table>
              <?php
              }
              ?>
              
          </form>
