@extends('templates.defaultuser')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
        <div class="form-group pull-right">
            <div class="input-group">
            <form action="{{ route('item.search') }}" method="GET">
                <input type="text" class="form-control" name="q" style="width:250px">
                <span class="input-group-btn">
                <button type="submit" class="btn btn-medium btn-primary pull-right">Search</button>
                </span>
            </form>
            </div>
        </div>
       
        
        <table class="table table-bordered">
            <thead>
                <tr class="heading black">
                <th  scope="col">No</th>
                <th scope="col">Items</th>
                <th scope="col">Category</th>
                <th scope="col">Descriptions</th>
                <th scope="col">Units</th>
                <th scope="col">Purchase</th>
                <th scope="col">Sale</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
    
            <!-- @if(is_array($itemsuser)||is_object($itemsuser)) -->
            @php
            $no = 1;
            @endphp
            @foreach( $itemsuser as $itemuser)
                <tr>
                <th scope="row">@php echo $no++ @endphp</th>
                <td>{{$itemuser->name_items}}</td>
                <td>{{$itemuser->category->name}}</td>
                <td>{{$itemuser->descriptions}}</td>
                <td>{{$itemuser->units}}</td>
                <td>{{$itemuser->purchase_prices}}</td>
                <td>{{$itemuser->sale_prices}}</td>
                <td>
                    <button class="btn btn-info"><a href="{{ route('item.edit', $item )}}">Edit</a></button>
                    <form action="{{ route('item.destroy',$item)}}" method='post'class=''>
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                  <button class="btn btn-danger" type="submit" >Delete</button>  
                  </form>
                </td>

                </tr>
            @endforeach
          
            </tbody>
        </table>
        {!! $itemsuser->render() !!}
        <!-- @endif -->
        </div>
    </div>
</div>

@endsection