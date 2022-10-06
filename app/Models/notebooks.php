<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class notebooks extends Model
{
    use HasFactory;
    protected $fillable = ['Brand_id','Model','imagelink','Processor','Chipset','Graphics','Display_Screen','Main_Memory','Memory_Slot','Max_Memory','Storage','Storage_Slot','Optical_Disk_Drive','Web_Camera','Sound_Technology','Audio_Jack','Speaker','Network','Wireless','Bluetooth','Ports','CardReader','Power_Adapter','OperatingSystem','Material','Weight','created_at','updated_at'];
}
