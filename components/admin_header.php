<?php
   if(isset($message) && is_array($message)){
      foreach($message as $msg){
         echo '
         <div class="message">
            <span>'.htmlspecialchars($msg, ENT_QUOTES, 'UTF-8').'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
         </div>
         ';
      }
   }
?>

<header class="header">

   <section class="flex">
   <a href="../admin/products.php" class="logo">Zen Cartopia<span>.</span></a>

      <nav class="navbar">
         <a href="../admin/products.php">Add products</a>
         <a href="../admin/admin_accounts.php">Admins</a>
         <a href="../admin/users_accounts.php">Users</a>
      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="user-btn" class="fas fa-user"></div>
      </div>

      <div class="profile">
         <?php
            if(isset($admin_id)){
               $select_profile = $conn->prepare("SELECT * FROM `admins` WHERE id = ?");
               $select_profile->execute([$admin_id]);
               $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
            } else {
               $fetch_profile = ['name' => 'Guest'];
            }
         ?>
         <p><?= htmlspecialchars(strtoupper($fetch_profile['name']), ENT_QUOTES, 'UTF-8'); ?></p>
         <a href="../admin/update_profile.php" class="btn">Update Profile</a>
         <a href="../components/admin_logout.php" class="delete-btn" onclick="return confirm('Logout from the website?');">Logout</a> 
      </div>

   </section>

</header>
