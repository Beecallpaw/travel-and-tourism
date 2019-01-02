<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
                'id'    => 1,
                'name'  => 'Ganesh Himal Overview',
                'slug'  => 'ganesh-himal-overview',
                'image' => 'assets/images/1545538352ganeshhimal.jpg',
                'description' => 'Ganesh Himal is a sub-range of the Himalayan mountain range towards north-central Nepal. This sub-range gets its name from the Hindu Lord Ganesha as the south face of Pabil (Ganesh IV 7,104m, 23,307ft) resembles the trunk of Ganesha. The highest peak in the range is Yangra (Ganesh I), 7,422m (24,350 ft). Ganesh Himal region is bounded by peaceable settlements and terraced fields, mighty glaciers, magnificent mountains and warm native people. We will have the moments to talk and befriend with the local people of these areas. We can observe the diverse ways of inhabitation, and come in contact with several people subsequent to various caste, creed, and culture. They live in the flat-roofed house in a remote village. The Trisuli Gandaki valley on the east separates it from the Langtang Himal (7300m), the Budhi Gandaki valley and the Shyar Khola valley; on the west separate it from the Sringi Himal and the Mansiri Himal.',
                'itinerary' => '<style type="text/css">
		@page { size: 8.5in 11in; margin: 0.79in }
		p { margin-bottom: 0.1in; direction: ltr; line-height: 115%; text-align: left; orphans: 2; widows: 2; background: transparent }
		a:link { color: #0000ff; text-decoration: underline }
		a:visited { color: #800000; so-language: zxx; text-decoration: underline }
	</style>

<p style="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%; background-color: rgb(255, 255, 255);">
<font face="Verdana, serif"><font style="font-size: 12pt">Day
01: Arrive in Kathmandu</font></font></p>
<p style="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%; background-color: rgb(255, 255, 255);">
<font face="Verdana, serif"><font style="font-size: 12pt">Day
02: City sightseeing</font></font></p>
<p style="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%; background-color: rgb(255, 255, 255);">
<font face="Verdana, serif"><font style="font-size: 12pt">Day
03: Drive from Kathmandu to Samari Bhanjyang(1250m.) through Trishuli
Bazaar (540m.) by bus.</font></font></p>
<p style="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%; background-color: rgb(255, 255, 255);">
<font face="Verdana, serif"><font style="font-size: 12pt">Day
04: Trek from Samari Bhanjyang to Katunje Bazaar (765m.) takes about
six and half hours.</font></font></p>
<p style="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%; background-color: rgb(255, 255, 255);">
<font face="Verdana, serif"><font style="font-size: 12pt">Day
05: Trek from Katunje Bazaar to Kintang Phedi (655m.) takes about
five and half hours.</font></font></p>
<p style="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%; background-color: rgb(255, 255, 255);">
<font face="Verdana, serif"><font style="font-size: 12pt">Day
06: Trek from Kintang Phedi to Jharlang (1500m.) takes about six
hours.</font></font></p>
<p style="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%; background-color: rgb(255, 255, 255);">
<font face="Verdana, serif"><font style="font-size: 12pt">Day
07: Trek from Jharlang to Chalise (2000m.) takes about six hours.</font></font></p>
<p style="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%; background-color: rgb(255, 255, 255);">
<font face="Verdana, serif"><font style="font-size: 12pt">Day
08: Trek from Chalise to Hindung takes about five hours.</font></font></p>
<p style="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%; background-color: rgb(255, 255, 255);">
<font face="Verdana, serif"><font style="font-size: 12pt">Day
09: Trek from Hindung to Rajgang Kharka takes about five and half
hours.</font></font></p>
<p style="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%; background-color: rgb(255, 255, 255);">
<font face="Verdana, serif"><font style="font-size: 12pt">Day
10: Trek from Rajgang Kharka to Kalo Seto Kunda (Black and White
Lake) Ganesh Himal Base Camp takes about six hours.</font></font></p>
<p style="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%; background-color: rgb(255, 255, 255);">
<font face="Verdana, serif"><font style="font-size: 12pt">Day
11: Rest day at the Base Camp.</font></font></p>
<p style="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%; background-color: rgb(255, 255, 255);">
<font face="Verdana, serif"><font style="font-size: 12pt">Day
12: Ganesh Himal Base Camp to Rajgang Kharka</font></font></p>
<p style="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%; background-color: rgb(255, 255, 255);">
<font face="Verdana, serif"><font style="font-size: 12pt">Day
13: Trek from Rajgang Kharka to Chalise (2000m.) takes about six
hours.</font></font></p>
<p style="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%; background-color: rgb(255, 255, 255);">
<font face="Verdana, serif"><font style="font-size: 12pt">Day
14: Trek from Chalise to Laba village (1750m.) takes about six hours.</font></font></p>
<p style="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%; background-color: rgb(255, 255, 255);">
<font face="Verdana, serif"><font style="font-size: 12pt">Day
15: Trek from Laba village to Manyang Bhanjyang (2934m.) takes about
five hours.</font></font></p>
<p style="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%; background-color: rgb(255, 255, 255);">
<font face="Verdana, serif"><font style="font-size: 12pt">Day
16: Trek from Manyang Bhanjyang to Majhgaun (2200m.) takes
approximately six hours.</font></font></p>
<p style="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%; background-color: rgb(255, 255, 255);">
<font face="Verdana, serif"><font style="font-size: 12pt">Day
17: Trek from Majhgaun to Budathum takes about five hours.</font></font></p>
<p style="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%; background-color: rgb(255, 255, 255);">
<font face="Verdana, serif"><font style="font-size: 12pt">Day
18: Trek from Budathum to Arughat Bazaar (500m.) takes about two
hours.</font></font></p>
<p style="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%; background-color: rgb(255, 255, 255);">
<font face="Verdana, serif"><font style="font-size: 12pt">Day
19: Recreation &amp; shopping day. Stay overnight at Hotel in
Kathmandu.</font></font></p>
<p style="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%; background-color: rgb(255, 255, 255);">
<font face="Verdana, serif"><font style="font-size: 12pt">Day
20: Transfer to the Airport for final departure. (Fly out from
Kathmandu).</font></font></p>',
                'category_id' => 1,
                'featured' => 1
        ]);
    }
}
