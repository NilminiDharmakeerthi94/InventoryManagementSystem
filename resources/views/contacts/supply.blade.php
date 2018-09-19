@section('js')
<script type="text/javascript">

      function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#showimage').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
      }

    $("#inputimage").change(function (e) {
      // console.log(e);
      readURL(this);
    });

</script>

@stop


@extends('templates.default')

@section('content')
<div class="container">
  <div class="col-md-8">
    <div class="x_panel">
      <div class="x_title">
       Send email to supplier
      </div>  
      <div class="x_content">
          <form action="{{ route('contacts.supply') }}" class="" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
                        <div class="form-group">
                        <label>Name Supplier</label>
                        <input type="" name="supplier_name" class="form-control" placeholder="Supplier Name.." value="{{ old('supplier_name') }}"/>  
                        </div>
                        <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Emai.." value="{{ old('email') }}"/>  
                        </div>

                        <div class="form-group has-feedback{{ $errors->has('descriptions')? 'has-error':''}}">
                        <label for="">Descriptions</label>
                        <textarea name="descriptions" id="" class="form-control" cols="30" rows="5" placeholder="Add Descriptions" value="">{{ old('descriptions') }}</textarea>
                        @if ($errors->has('descriptions'))
                       <span class="help-block">
                       <p>{{ $errors->first('descriptions') }}</p>
                     </span>
                     @endif
                        </div>

          

        
          <div class="form-group">
            <input type="submit" value="Send" class="btn btn-primary">
          </div>
          
        </form>
      </div>
    </div>
  </div>
  
</div>
@endsection