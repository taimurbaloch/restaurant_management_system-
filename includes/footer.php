
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 
   <?php
       if(isset($_SESSION['success'])):
    ?>
    <script>
    Swal.fire({
        icon: 'success',
        title: 'Success',
        text: '<?php echo $_SESSION["success"]; ?>'
    });
    </script>
    <?php
     unset($_SESSION['success']);
    endif;
     ?>

</body>

</html>
