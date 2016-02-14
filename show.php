    <div class="col-md-12">
        <ol>
          <?php
          include 'connect.php';
          $sql="select * from groups ORDER BY ID DESC limit 30";
          $data=mysql_query($sql);
          while($r=mysql_fetch_array($data)){
          ?>
          <li><a href=""><?php echo $r['Name']; ?></a>
          <span><a href="update.php?p=<?php echo $r['id']; ?>" style="color: #FF9800;">update</a></span>
          <span><a href="">Delete</a></span>
          </li>
          
          <?php
          }
          ?>
        </ol>
    </div>
