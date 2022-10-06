@extends('brands.master')


<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit brands Data
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('brands.update', $brands->id ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="Name">Name:</label>
              <input type="text" class="form-control" name="Name" value="{{ $brands->Name }}"/>
          </div>
          <div class="form-group">
              <label for="created_at">created_at:</label>
              <input type="text" class="form-control" name="created_at" value="{{ $brands->created_at }}"/>
          </div>
          <div class="form-group">
              <label for="updated_at">updated_at :</label>
              <input type="text" class="form-control" name="updated_at" value="{{ $brands->updated_at }}"/>
          </div>


          <button type="submit" class="btn btn-primary">Update Data</button>
      </form>
  </div>
</div>
