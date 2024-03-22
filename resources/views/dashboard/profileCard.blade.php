

<div class="col-md-3 " >
<!-- Profile Image -->
<div class="card" style="border-style: solid; border-color: #62AC83"  id = "dashboard_side">
  <div class="card-body box-profile" style="border-style: solid; border-color: #62AC83; border-radius: 10px">
    <div style="display: flex; align-items: center; margin-left:40%;">
    <img src="{{ asset('assets/images/avatar4.png') }}" alt="TaskSwap" height="80" style="border-radius: 10%;">
    </div>

    <h3 class="profile-username text-center">{{ Auth::user()->username }}</h3>

<div style=" display: flex; align-items: center; margin-left:35%;">
    <img src="{{ asset('assets/images/star.png') }}" height="20">
    <img src="{{ asset('assets/images/star.png') }}" height="20">
    <img src="{{ asset('assets/images/star.png') }}" height="20">
    <img src="{{ asset('assets/images/star.png') }}" height="20">
    <img src="{{ asset('assets/images/star1.png') }}" height="20">
</div><br>

    <p class="text-center">{{ Auth::user()->bio }} </p>

    <hr style="color: #62AC83">

    <strong><i class="fas fa-book mr-1"></i> Education</strong>

    <p>
    {{ Auth::user()->education }} 
    </p>

    <hr style="color: #62AC83">

    <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

    <p>    {{ Auth::user()->location }} </p>

    <hr style="color: #62AC83">

    <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

    <p>
    {{ Auth::user()->skills }} 
    </p>

    <hr style="color: #62AC83">

    <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

    <p>{{ Auth::user()->notes }} </p>
    <div>
          <button class="btn btn-special" id="Post_Task"  type="submit" style="width:100%;font-weight:bold">Post Task</button>
          <button class="btn btn-special" onClick="location.href='Token Page'" type="Button" style="width:100%;font-weight:bold">My Token Wallet</button> 
          <a href = "My Portfolio">
          <button class="btn btn-special"  type="submit" style="width:100%;font-weight:bold">My Portfolio</button>
          </a>   
          
          </div>
          </div>

      <!-- /.card-body -->
     </div>
    <!-- /.card --> 
  </div>

  <script>
            document.getElementById('Post_Task').addEventListener('click', function() {
                $('#Create_post').modal('show');
            });
        </script>

  
  <div class="modal fade" id="Create_post"  >
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div style="align-items:center">
                    <h4>CREATE POST</h4>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                </button>
            </div>
            <div class="modal-body">
            <div class="container">
            <form action="{{ route('post.store')}}" method="POST">
        @csrf
        @method('POST')
        <div class="form-group row">
    <label for="inputName" class="col-sm-2 col-form-label" ><h5>TASK TITLE:</h5></label>
    <div class="col-sm-10">
        <input type="text" id="post_title" name = "post_title" class="form-control rounded-3" >
    </div>
      </div>
        <br>
    <div class="form-group row">
    <label for="inputStatus" class="col-sm-2 col-form-label" style="option:hover{background:#003163}"  ><h5>TASK CATEGORY:</h5></label>
    <div class="col-sm-10">
        <select id="post_category" name = "post_category" class="form-select rounded-3" >
        @foreach($data as $row)
            <option value="{{$row->category}}">{{$row->category}}</option>
        @endforeach
        </select>
    </div>
    <label for="inputDescription" class="col-sm-5 col-form-label" style="option:hover{background:#003163}"  ><h5>TASK DESCRIPTION:</h5></label>
    <div class="col-sm-12">

        <textarea class="note-editable card-block" name="post_content" id="post_content" cols="30" rows="10" role="textbox" aria-multiline="true" spellcheck="true" 
        style="height: 160px; width:100%; border-style: solid; border-color: #ced4da; border-width: 2px; border-radius: 10px" data-gramm="false" 
        wt-ignore-input="true" data-quillbot-element="ESLAb7FtqB5l7ZgsNvD55">

        
                      </textarea>
        <br>
        <div class="form-group row">
            <div class="col-sm-6">
            <button class="btn btn-special"  type="submit" style="width:100%;font-weight:bold;background:gray">CANCEL</button>
            </div>
            <div class="col-sm-6">
            <button class="btn btn-special"  type="submit" style="width:100%;font-weight:bold">POST TASK</button>
            </div>
        </div>
    </div>
</div>
            </form>
            </div>
            </div>
        </div>
    </div>
  </div>


 