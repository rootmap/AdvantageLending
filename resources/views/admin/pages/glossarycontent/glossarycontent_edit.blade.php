
@extends("admin.layout.master")
@section("title","Edit Glossary Content")
@section("content")
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Glossary Content</h1>
      </div>
      <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Update Glossary Content</li>
            </ol>
      </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            @include("admin.include.msg")
        </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
<section>
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-8 offset-2">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Edit / Modify Glossary Content</h3>
        </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{url('glossarycontent/update/'.$dataRow->id)}}" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
          
            <div class="card-body">
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="section_title">Section Title</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->section_title)){
                            ?>
                            value="{{$dataRow->section_title}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Section Title" id="section_title" name="section_title">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="section_detail">Section Detail</label>
                        <textarea class="form-control textarea" rows="3"  placeholder="Enter Section Detail" id="section_detail" name="section_detail"><?php 
                                if(isset($dataRow->section_detail)){
                                    
                                    echo $dataRow->section_detail;
                                    
                                }
                                ?></textarea>
                      </div>
                    </div>
                </div>
                
        <div class="row">
            <div class="col-sm-12">
              <!-- radio -->
              <div class="form-group">
              <label>Choose Module Status</label>
        
                        <div class="form-check">
                            <input class="form-check-input" type="radio"  
                                <?php 
                                if($dataRow->module_status=="Active"){
                                    ?>
                                    checked="checked" 
                                    <?php 
                                }
                                ?>
                          id="module_status_0" name="module_status" value="Active">
                          <label class="form-check-label">Active</label>
                        </div>
                
                        <div class="form-check">
                            <input class="form-check-input" type="radio"  
                                <?php 
                                if($dataRow->module_status=="Inactive"){
                                    ?>
                                    checked="checked" 
                                    <?php 
                                }
                                ?>
                          id="module_status_1" name="module_status" value="Inactive">
                          <label class="form-check-label">Inactive</label>
                        </div>
                
                    </div>
                </div>
            </div>
                   
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">
                <i class="fas fa-save"></i> 
                Update
              </button>
              <a class="btn btn-danger" href="{{url('glossarycontent/edit/'.$dataRow->id)}}">
                <i class="far fa-times-circle"></i> 
                Reset
              </a>
            </div>
          </form>
        </div>
        <!-- /.card -->

      </div>
      <!--/.col (left) -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
@endsection
@section('css')
    <link rel="stylesheet" href="{{url('admin/plugins/summernote/summernote-bs4.css')}}">
@endsection
@section("js")

    <script src="{{url('admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
    <script>
    $(document).ready(function(){
        bsCustomFileInput.init();
    });
    </script>

    <script src="{{url('admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
    <script>
      $(function () {
        // Summernote
        $('.textarea').summernote({
          height: 100,
          toolbar: [
                    ['font', ['bold', 'italic', 'underline', 'clear']],
                    ['view', ['fullscreen', 'codeview']],
                  ],
        });

        $('.textareadescription').summernote({
          height: 100,
          toolbar: [
                    
                    ['font', ['bold', 'italic', 'underline', 'clear']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['view', ['fullscreen', 'codeview']],
                  ],
        });
      });
    </script>

@endsection
        