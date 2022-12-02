@include('layouts.app')


<style>
    #container{
        box-shadow: 0 5px 10px rgba(128, 128, 128, 0.432);
        padding: 40px;
        border-radius: 10px;
    }
</style>
<div id="container" class="container">
    <p><b style="color: rgb(107, 107, 107)">Upload New Item:</b> <a class="btn btn-primary" href="{{ url('/upload') }}" style="color: aliceblue">Add +</a></p>
    <table class="table table-hover table-inverse " style="width: 100%; height:100%">
        <thead class="thead-inverse">
            <tr>
                <th>Soap Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>#</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <td scope="row">{{ $item->name }}</td>
                    <td>Rs.{{ $item->price }}.00</td>
                    <td>{{ $item->discription }}</td>
                    <td>
                        <a href="{{ route('update',$item->id) }}" class="btn btn-warning">Update</a>
                        <a href="{{ route('delete',$item->id) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
    </table>
</div>