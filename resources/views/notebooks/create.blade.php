<!-- create.blade.php -->

@extends('notebooks.master')


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
      <form method="post" action="{{ route('notebooks.store') }}">
          <!-- -->
          @csrf
          @method('POST')
          <label for="Brand_id">Brand_id :</label>
          <input type="text" class="form-control rounded" name="Brand_id">
<!-- -->
<label for="Model">Model</label>
<input type="text" class="form-control rounded" name="Model">
<label for="imagelink">imagelink</label>
<input type="text" class="form-control rounded" name="imagelink">
<label for="Processor">Processor</label>
<input type="text" class="form-control rounded" name="Processor">
<label for="Chipset">Chipset</label>
<input type="text" class="form-control rounded" name="Chipset">
<label for="Graphics">Graphics</label>
<input type="text" class="form-control rounded" name="Graphics">
<label for="Display_Screen">Display_Screen</label>
<input type="text" class="form-control rounded" name="Display_Screen">
<label for="Main_Memory">Main_Memory</label>
<input type="text" class="form-control rounded" name="Main_Memory">
<label for="Memory_Slot">Memory_Slot</label>
<input type="text" class="form-control rounded" name="Memory_Slot">
<label for="Max_Memory">Max_Memory</label>
<input type="text" class="form-control rounded" name="Max_Memory">
<label for="Storage">Storage</label>
<input type="text" class="form-control rounded" name="Storage">
<label for="Storage_Slot">Storage_Slot</label>
<input type="text" class="form-control rounded" name="Storage_Slot">
<label for="Optical_Disk_Drive">Optical_Disk_Drive</label>
<input type="text" class="form-control rounded" name="Optical_Disk_Drive">
<label for="Web_Camera">Web_Camera</label>
<input type="text" class="form-control rounded" name="Web_Camera">
<label for="Sound_Technology">Sound_Technology</label>
<input type="text" class="form-control rounded" name="Sound_Technology">
<label for="Audio_Jack">Audio_Jack</label>
<input type="text" class="form-control rounded" name="Audio_Jack">
<label for="Speaker">Speaker</label>
<input type="text" class="form-control rounded" name="Speaker">
<label for="Network">Network</label>
<input type="text" class="form-control rounded" name="Network">
<label for="Wireless">Wireless</label>
<input type="text" class="form-control rounded" name="Wireless">
<label for="Bluetooth">Bluetooth</label>
<input type="text" class="form-control rounded" name="Bluetooth">
<label for="Ports">Ports</label>
<input type="text" class="form-control rounded" name="Ports">
<label for="CardReader">CardReader</label>
<input type="text" class="form-control rounded" name="CardReader">
<label for="Power_Adapter">Power_Adapter</label>
<input type="text" class="form-control rounded" name="Power_Adapter">
<label for="OperatingSystem">OperatingSystem</label>
<input type="text" class="form-control rounded" name="OperatingSystem">
<label for="Material">Material</label>
<input type="text" class="form-control rounded" name="Material">
<label for="Weight">Weight</label>
<input type="text" class="form-control rounded" name="Weight">
<label for="created_at">created_at :</label>
<input type="text" class="form-control rounded" name="created_at">
<label for="updated_at">updated_at :</label>
<input type="text" class="form-control rounded" name="updated_at">

          <button type="submit" class="btn btn-primary">Add notebooks</button>
      </form>
  </div>
</div>
</div>