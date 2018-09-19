@extends('templatesnew.defaultnew')

@section('content')
@if (count($results))
<div class="x_panel green white-text">Search Result : <b>{{$query}}</b></div>
    <div class="container">
		<div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Items</th>
                    <th scope="col">Category</th>
                    <th scope="col">Descriptions</th>
                    <th scope="col">Sale</th>
         
                    </tr>
                </thead>
                <tbody>
                @php
                $no=1;
                @endphp 
                @foreach( $results as $result)
                    <tr>
                    <th scope="row">@php echo $no++ @endphp</th>
                    <td>{{$result->name_items}}</td>
                    <td>{{$result->category->name}}</td>
                    <td>{{$result->descriptions}}</td>
                    <td>{{$result->sale_prices}}</td>
                    <td>
                        <button class="btn btn-info"><a href="{{ route('item.edit', $result )}}">edit</a></button>
                        <form action="{{ route('item.destroy',$result)}}" method='post'class=''>
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                    <button class="btn btn-danger" type="submit">Delete</button>  
                    </form>
                    </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
                
		</div>
	</div>
	

</div>

{{ $results->render() }}
	
@else
   <div class="card-panel red darken-3 white-text">Oops.. Data <b>{{$query}}</b> can't be deleted</div>
@endif
	

@endsection