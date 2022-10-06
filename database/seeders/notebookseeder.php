<?php

namespace Database\Seeders;

use App\Models\notebooks;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class notebookseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         
             $notebook = [
                ['Brand_id' => 1,
             'Model' => 'Vivobook Pro 16X OLED (N7601ZM-MQ901WS)',
             'imagelink' => 'https://img.advice.co.th/images_nas/pic_product4/A0145657/A0145657OK_ORI_1.jpg',
             'Processor' => '	
             Intel Core i9-12900H (2.5GHz up to 5.0GHz, 24MB Intel Smart Cache)',
             'Chipset' => 'Intel SoC Platform',
             'Graphics' => '	
             NVIDIA GeForce RTX 3060 (6GB GDDR6)',
             'Display_Screen' => '16.0" 3840x2400 (4K), OLED, 60Hz, 600nits, Glossy, 0.2ms, 100% DCI-P3, Pantone Validated',
             'Main_Memory' => '	
             16GB DDR5 Onboard memory',
             'Memory_Slot' => '1x Slot',
             'Max_Memory' => '32GB',
             'Storage' => '1TB PCIe NVMe M.2 SSD',
             'Storage_Slot' => '1x M.2 2280 PCIe 3.0x4',
             'Optical_Disk_Drive' => 'None',
             'Web_Camera' => '1080p FHD camera with privacy shutter',
             'Sound_Technology' => '	
             Smart Amp Technology',
             'Audio_Jack' => '1x 3.5mm Combo Audio Jack',
             'Speaker' => '• Built-in speaker',
             'Network' => '	
             10/100/1000 LAN',
             'Wireless' => 'Wireless 802.11ax (Wi-Fi 6E)',
             'Bluetooth' => 'Bluetooth 5.2',
             'Ports' => '1x HDMI 2.1 + 1x USB 3.2 Gen 1 Type-A',
             'CardReader' => 'Micro SD Express 7.1 card reader',
             'Power_Adapter' => '	
             ø6.0, 240W AC Adapter, Output: 20V DC, 12A, 240W, Input: 100~240V AC 50/60Hz universal',
             'OperatingSystem' => 'Windows 11 Home (64-bit) + Microsoft Office Home&Student 2021',
             'Material' => '	
             • LCD cover-material : Aluminum',
             'Weight' => '2.30 KG'],
             //Data2
             ['Brand_id' => 2,
             'Model' => 'Nitro AN515-58-55UB/T005',
             'imagelink' => 'https://img.advice.co.th/images_nas/pic_product4/A0143996/A0143996OK_ORI_1.jpg',
             'Processor' => 'Intel Core i5-12500H (2.5GHz up to 4.5GHz, 18MB Intel Smart Cache)',
             'Chipset' => 'N/A',
             'Graphics' => '	
             NVIDIA GeForce RTX 3050 (4GB GDDR6)',
             'Display_Screen' => '15.6" 1920x1080 (FHD), IPS, 165Hz, 
             sRGB 100%, high-brightness (300 nits)',
             'Main_Memory' => '8GB (8GB x1) DDR4',
             'Memory_Slot' => '2x Slot',
             'Max_Memory' => '32GB',
             'Storage' => '512GB PCIe NVMe M.2 SSD',
             'Storage_Slot' => '1x M.2 2280 PCIe 3.0x4',
             'Optical_Disk_Drive' => 'None',
             'Web_Camera' => '1080p FHD camera with privacy shutter',
             'Sound_Technology' => '	
             Smart Amp Technology',
             'Audio_Jack' => '1x 3.5mm Combo Audio Jack',
             'Speaker' => '• Built-in speaker',
             'Network' => '	
             10/100/1000 LAN',
             'Wireless' => 'Wireless 802.11ax (Wi-Fi 6E)',
             'Bluetooth' => 'Bluetooth 5.2',
             'Ports' => '1x HDMI 2.1 + 1x USB 3.2 Gen 1 Type-A',
             'CardReader' => 'Micro SD Express 7.1 card reader',
             'Power_Adapter' => '	
             ø6.0, 240W AC Adapter, Output: 20V DC, 12A, 240W, Input: 100~240V AC 50/60Hz universal',
             'OperatingSystem' => 'Windows 11 Home (64-bit) + Microsoft Office Home&Student 2021',
             'Material' => '	
             • LCD cover-material : Aluminum',
             'Weight' => '2.30 KG'],
             ];


             notebooks::insert($notebook);
    }
}
