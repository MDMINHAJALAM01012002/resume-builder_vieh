
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="<?=$action->helper->loadjs('main.js')?>"></script>
<script>
  const Toast = Swal.mixin({
  toast: true,
  position: 'bottom-end',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
});
    <?php
    $error=$action->session->get('error');
    $success=$action->session->get('success');

    if($error){
        ?>
         
Toast.fire({
  icon: 'error',
  title: '<?=$error?>'
});

        <?php
       $action->session->delete('error');
    }
    ?>
<?php
if($success){
        ?>
     
Toast.fire({
  icon: 'success',
  title: '<?=$success?>'
});

        <?php
        $action->session->delete('success');
    }
    ?>

/*("#addskill").click(function(){
      var skill = $('#userskill').val();
      if(!skill){
        Toast.fire({
          icon: 'error',
          title: 'enter a skill'
        });
        return;
      }
      $("#skills").append('<span class="badge bg-primary p-1 m-1">'${skill}'<input type="hidden" name="skill[]" value='${skill}'/><spam class="text-black removeskill" onclick="removeskill(this)">X</spam></span>')
    
    });
    
    function removeskill(button){
  $(button).parent().remove();
    }

    */
   
</script>
</body>
</html>