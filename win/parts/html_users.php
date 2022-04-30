<div class="d-grid gap-2 col-6   mx-auto">
    <button type="button" id="btn-round" class="btn btn-primary my-5" data-bs-toggle="modal" data-bs-target="#modal">اختيار الرابح</button>
</div>




<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">الرابح في المسابقة هو:</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <?php foreach($users as $user):?>
            <h2 class="card-title"><?php echo htmlspecialchars($user['f_name']).' '.htmlspecialchars($user['l_name'])?></h2><!--.'<br>'.htmlspecialchars($user['email']);-->
         <?php endforeach; ?>
    </div>
    </div>
  </div>
</div>

<!-- <div id="cards" >
  
        <div class="col-sm-6">
            <div class="card my-2 bg-light">
                <div class="card-body">
                    <h5 class="card-title"><?php// echo htmlspecialchars($user['f_name']).' '.htmlspecialchars($user['l_name']).'<br>'.htmlspecialchars($user['email']);?></h5>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>
    
</div> -->