<!-- create.blade.php -->

@extends('brands.master')


<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="container mx-auto">
<div class="card uper">
  <div class="card-header">
    Add Data
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
      <form method="post" action="{{ route('brands.store') }}">
          <!-- -->
          @csrf
          @method('POST')
          <label for="Name">Name:</label>
          <input type="text" class="form-control rounded" name="Name">
          <label for="created_at">created_at :</label>
          <input type="text" class="form-control rounded" name="created_at">
          <label for="updated_at">updated_at :</label>
          <input type="text" class="form-control rounded" name="updated_at">

          <button type="submit" class="btn btn-primary">Add brands</button>
      </form>
  </div>
</div>
</div>