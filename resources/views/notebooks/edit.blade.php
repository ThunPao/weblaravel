@extends('notebooks.master')


<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit notebooks Data
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
      <form method="post" action="{{ route('notebooks.update', $notebooks->id ) }}">
<!-- -->
<div class="form-group">
  @csrf
  @method('PATCH')
<div class="form-group">
  <input type="text" class="form-control rounded" name="Brand_id" value="{{ $notebooks->Brand_id }}">
<label for="Brand_id">Brand_id</label>
</div>
<div class="form-group">
  <input type="text" class="form-control rounded" name="Model" value="{{ $notebooks->Model }}">
<label for="Model">Model</label></div>
<div class="form-group">
<label for="imagelink">imagelink</label></div>  
<img src="{{ $notebooks->imagelink }}" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" style="width:300px;height:300px;" alt="">
          
<input type="text" class="form-control rounded" name="imagelink" value="{{ $notebooks->imagelink }}">

<label for="Processor">Processor</label></div>
<div class="form-group">
<input type="text" class="form-control rounded" name="Processor" value="{{ $notebooks->Processor }}">
<label for="Chipset">Chipset</label></div>
<div class="form-group">
<input type="text" class="form-control rounded" name="Chipset" value="{{ $notebooks->Chipset }}">
<label for="Graphics">Graphics</label></div>
<div class="form-group">
<input type="text" class="form-control rounded" name="Graphics" value="{{ $notebooks->Graphics }}">
<label for="Display_Screen">Display_Screen</label></div>
<div class="form-group">
<input type="text" class="form-control rounded" name="Display_Screen" value="{{ $notebooks->Display_Screen }}">
<label for="Main_Memory">Main_Memory</label></div>
<div class="form-group">
<input type="text" class="form-control rounded" name="Main_Memory" value="{{ $notebooks->Main_Memory }}">
<label for="Memory_Slot">Memory_Slot</label></div>
<div class="form-group">
<input type="text" class="form-control rounded" name="Memory_Slot" value="{{ $notebooks->Memory_Slot }}">
<label for="Max_Memory">Max_Memory</label></div>
<div class="form-group">
<input type="text" class="form-control rounded" name="Max_Memory" value="{{ $notebooks->Max_Memory }}">
<label for="Storage">Storage</label></div>
<div class="form-group">
<input type="text" class="form-control rounded" name="Storage" value="{{ $notebooks->Storage }}">
<label for="Storage_Slot">Storage_Slot</label></div>
<div class="form-group">
<input type="text" class="form-control rounded" name="Storage_Slot" value="{{ $notebooks->Storage_Slot }}">
<label for="Optical_Disk_Drive">Optical_Disk_Drive</label></div>
<div class="form-group">
<input type="text" class="form-control rounded" name="Optical_Disk_Drive" value="{{ $notebooks->Optical_Disk_Drive }}">
<label for="Web_Camera">Web_Camera</label></div>
<div class="form-group">
<input type="text" class="form-control rounded" name="Web_Camera" value="{{ $notebooks->Web_Camera }}">
<label for="Sound_Technology">Sound_Technology</label></div>
<div class="form-group">
<input type="text" class="form-control rounded" name="Sound_Technology" value="{{ $notebooks->Sound_Technology }}">
<label for="Audio_Jack">Audio_Jack</label></div>
<div class="form-group">
<input type="text" class="form-control rounded" name="Audio_Jack" value="{{ $notebooks->Audio_Jack }}">
<label for="Speaker">Speaker</label></div>
<div class="form-group">
<input type="text" class="form-control rounded" name="Speaker" value="{{ $notebooks->Speaker }}">
<label for="Network">Network</label></div>
<div class="form-group">
<input type="text" class="form-control rounded" name="Network" value="{{ $notebooks->Network }}">
<label for="Wireless">Wireless</label></div>
<div class="form-group">
<input type="text" class="form-control rounded" name="Wireless" value="{{ $notebooks->Wireless }}">
<label for="Bluetooth">Bluetooth</label></div>
<div class="form-group">
<input type="text" class="form-control rounded" name="Bluetooth" value="{{ $notebooks->Bluetooth }}">
<label for="Ports">Ports</label></div>
<div class="form-group">
<input type="text" class="form-control rounded" name="Ports" value="{{ $notebooks->Ports }}">
<label for="CardReader">CardReader</label></div>
<div class="form-group">
<input type="text" class="form-control rounded" name="CardReader" value="{{ $notebooks->CardReader }}">
<label for="Power_Adapter">Power_Adapter</label></div>
<div class="form-group">
<input type="text" class="form-control rounded" name="Power_Adapter" value="{{ $notebooks->Power_Adapter }}">
<label for="OperatingSystem">OperatingSystem</label></div>
<div class="form-group">
<input type="text" class="form-control rounded" name="OperatingSystem" value="{{ $notebooks->OperatingSystem }}">
<label for="Material">Material</label></div>
<div class="form-group">
<input type="text" class="form-control rounded" name="Material" value="{{ $notebooks->Material }}">
<label for="Weight">Weight</label></div>
<div class="form-group">
<input type="text" class="form-control rounded" name="Weight" value="{{ $notebooks->Weight }}">
<label for="created_at">created_at :</label></div>

<div class="form-group">
<input type="text" class="form-control rounded" name="created_at" value="{{ $notebooks->created_at }}">
</div>
<label for="updated_at">updated_at :</label>
<input type="text" class="form-control rounded" name="created_at" value="{{ $notebooks->updated_at }}">
<!-- -->
          <button type="submit" class="btn btn-primary">Update Data</button>
      </form>
  </div>
</div>
