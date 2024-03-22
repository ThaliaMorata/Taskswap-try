<div class="col-md-9" >
<div  style="border-style: solid; border-color: #62AC83; border-radius:20px" id="dashboard_section" >

  <div >
    <!-- Content Header (Page header) -->
    <div class="content-header" >
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <div class="rounded-square">
          <p class="square-text">DAILY REWARDS</p>
          <p class="wallet">0.00</p>
          
          <div class="token-images">
            <img src="assets/images/token.png" alt="Token 1" class="token">
            <img src="assets/images/token.png" alt="Token 2" class="token">
            <img src="assets/images/token.png" alt="Token 3" class="token">
            <img src="assets/images/token.png" alt="Token 4" class="token">
            <img src="assets/images/token.png" alt="Token 5" class="token">
            <img src="assets/images/token.png" alt="Token 6" class="token">
            <img src="assets/images/token.png" alt="Token 7" class="token">
          </div>
          <button class="check " type="submit">CHECK-IN TODAY</button>
          </div>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
  </div>
    <!-- Main content -->
    <section class="content" style="margin-left: 4%; margin-right:4%">
      <div class="container-fluid" >
      <p class="acc">ACCOMPLISHMENTS</p>
      <div class="info-box" style="border-style: solid; border-color: #62AC83; border-radius:20px">
      <img class="trophy1" src="assets/images/trophy.png" alt="Trophy 1">

              <div class="info-box-content">
                <span class="award3">Top-rated Hero on TaskSwap</span>
                <span class="desc3 secret">Lorem ipsum dolor sit amet. Ut facilis corrupti sed culpa consequatur et autem consequatur ut quae placeat qui inventore sapiente qui distinctio omnis aut neque vitae. Ab illo officia sed aliquam harum ea sint dolor in deserunt voluptatem. </span>
              </div>
              <!-- /.info-box-content -->
        </div>
        <div class="info-box" style="border-style: solid; border-color: #62AC83; border-radius:20px">
      <img class="trophy1" src="assets/images/trophy.png" alt="Trophy 1">
              <div class="info-box-content">
                <span class="award3">Outstanding Academic Hero on TaskSwap</span>
                <span class="desc3 secret">Lorem ipsum dolor sit amet. Ut facilis corrupti sed culpa consequatur et autem consequatur ut quae placeat qui inventore sapiente qui distinctio omnis aut neque vitae. Ab illo officia sed aliquam harum ea sint dolor in deserunt voluptatem. </span>
              </div>
              <!-- /.info-box-content -->
        </div>

        <div class="info-box" style="border-style: solid; border-color: #62AC83; border-radius:20px">
      <img class="trophy1" src="assets/images/trophy.png" alt="Trophy 1">
              <div class="info-box-content">
                <span class="award3">Excellent in TaskSwap</span>
                <span class="desc3 secret">Lorem ipsum dolor sit amet. Ut facilis corrupti sed culpa consequatur et autem consequatur ut quae placeat qui inventore sapiente qui distinctio omnis aut neque vitae. Ab illo officia sed aliquam harum ea sint dolor in deserunt voluptatem. </span>
              </div>
              <!-- /.info-box-content -->
        </div>
    </div>

    <hr style="border:solid; border-radius:10px;">
    <h1>MY POSTS</h1>
    
    @foreach($posts as $posts)
          <div class="col-lg-15">
            <div class="card">
              <div class="card-header">
              <div class="col-sm-12">
                    <div class="text-right">
                    <button>
                    <i class="fas fa-pencil-alt btn btn-info btn-sm" id="Edit_Task" name="Edit_Task"></i>
                  </button>
                  <button>
                    <i class="fas fa-trash btn btn-danger btn-sm" id="Delete_Task" name="Delete_Task"></i>
                  </button>
                    </div>
                  </div>
                <h1 class="task_title  m-0" style="font-size:35px; ">{{$posts->post_title}}</h1>
              </div>
              <div class="card-body">
                <h2 class="card-title" style="font-size:27px">{{$posts->post_category}}</h2>
                <p class="card-text">
                {{$posts->post_content}}</p>
 
              </div>
            </div>
            @endforeach

        </section>
    </div>
</div>

<!-- Edit Modal -->
<div class="modal fade" id="Edit_modal" data-backdrop="false">
  <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <div style="align-items:center">
                  <h4>EDIT POST</h4>
              </div>
              <button type="button" id="close_btn" name="close_btn" class="close_btn" data-dismiss="modal" aria-label="Close">&times;</button>
          </div>
          <div class="modal-body">
              <div class="container">
                  <form action="{{ route('post.edit', ['Posts' => $posts]) }}" method="POST">
                      @csrf
                      @method('put')

                      <div class="form-group row">
                          <label for="inputName" class="col-sm-2 col-form-label"><h5>TASK TITLE:</h5></label>
                          <div class="col-sm-10">
                              <input type="text" id="post_title" name="post_title" class="form-control rounded-3" value="{{ $post->post_title ?? '' }}">
                              <x-input-error class="mt-2" :messages="$errors->get('post_title')" />
                          </div>
                      </div>
                      <br>
                      <div class="form-group row">
                          <label for="inputStatus" class="col-sm-2 col-form-label"><h5>TASK CATEGORY:</h5></label>
                          <div class="col-sm-10">
                              <select id="post_category" name="post_category" class="form-select rounded-3">
                                  <option value="MATHEMATICS">MATHEMATICS</option>
                                  <option value="ENGLISH">ENGLISH</option>
                              </select>
                          </div>
                      </div>
                      <label for="inputDescription" class="col-sm-5 col-form-label"><h5>TASK DESCRIPTION:</h5></label>
                      <div class="col-sm-12">
                          <textarea class="note-editable card-block" name="post_content" id="post_content" cols="30" rows="10" role="textbox" aria-multiline="true" spellcheck="true" style="height: 160px; width:100%; border-style: solid; border-color: #ced4da; border-width: 2px; border-radius: 10px" data-gramm="false" wt-ignore-input="true" data-quillbot-element="ESLAb7FtqB5l7ZgsNvD55">
                              {{ $post->post_content ?? '' }}
                          </textarea>
                      </div>
                      <br>
                      <div class="form-group row">
                          <div class="col-sm-12 text-right">
                              <x-primary-button class="btn btn-special" type="submit" style="width:100%;font-weight:bold">EDIT TASK</x-primary-button>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>

<!-- Script to Trigger Modal -->
<script>
  document.getElementById('Edit_Task').addEventListener('click', function() {
      $('#Edit_modal').modal('show');
  });
</script>


  <!-- Delete Modal -->
<script>
  document.getElementById('Delete_Task').addEventListener('click', function() {
       $('#Delete_modal').modal('show');
  });

  document.getElementById('Cancel').addEventListener('click', function() {
     $('#Delete_modal').modal('toggle');
  });


</script>
<div class="modal fade" id="Delete_modal">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                    </button>
                </div>

                <div class="form-group row text-center" style="margin-top: 8%; margin-bottom:-2%;">
                    <label class="col-sm-12 col-form-label"><h4>ARE YOU SURE YOU WANT TO DELETE THIS TASK?</h4></label>
                </div>
                <br>
                <div class="form-group row" style="margin-left: 10%; margin-right:10%; margin-top:-3%">
                    <div class="col-sm-6">
                    <button class="btn btn-special " id = "Cancel"  type="submit" style="width:100%;font-weight:bold; Background:gray;">CANCEL</button>
                    </div>
                    <div class="col-sm-6 text-right">
                      <form action="{{route('post.delete', ['Posts' => $posts])}}">
                      @csrf
                      @method('delete')
                    <button class="btn btn-special"  type="submit" style="width:100%;font-weight:bold">DELETE</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Delete Modal -->