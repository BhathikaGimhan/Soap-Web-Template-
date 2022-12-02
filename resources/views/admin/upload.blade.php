@include('layouts.app')

<style>
    #container{
        box-shadow: 0 5px 10px rgba(128, 128, 128, 0.432);
        padding: 40px;
        border-radius: 10px;
    }
</style>
<div id="container" class="container">
    <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <a href="{{ route('redirect') }}" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
          </svg> Back</a>
        <div class="form-group">
            <h2>Upload Product</h2>
            <hr><br>
        </div>
        <div class="form-group">
            <label for="name">Product Name:</label>
            <input type="name" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Enter Name">
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="price">Product Price:</label>
            <input type="text" onkeypress="return isNumber(event)" class="form-control @error('price') is-invalid @enderror" id="price" name="price" placeholder="Enter Price (only number)">
            @error('price')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" placeholder="Enter Description" rows="3"></textarea>
            @error('description')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="myFile">Image:</label><br>
            <input class="form-control @error('image') is-invalid @enderror" type="file" id="myFile" name="image">
            @error('image')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<script>
    function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;
    }
</script>