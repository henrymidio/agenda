<div class="modal fade" id="modal-compromisso" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="myModalLabel">NOVO COMPROMISSO</h4>
      </div>
      <div class="modal-body">
        <form action="" method="post" role="form">
         <div class="form-group">

<div class="row">

<div class="col-md-12">
          <label style="margin-top: 7px">Data:</label>
          <input type="datetime-local" class="form-control" name="data" placeholder="00/00/0000 00:00" required>
</div>
<div class="col-md-12">
           <div class="form-group" style="margin-top: 7px">
			  <label for="comment">Descrição:</label>
			  <textarea class="form-control" rows="5" id="comment" name="compromisso"></textarea>
		</div>
</div>

</div>
</div>
         </div>
        <div class="modal-footer">
         <input type="submit" name='submit' style="display: block; width: 100%; margin-top: 0px" class="btn btn-success btn-lg">
      </div>
      </div>
      
</form>
    </div>
  </div>
</div> 