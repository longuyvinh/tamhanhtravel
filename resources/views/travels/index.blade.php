@extends('layouts.travel')

@section('content')
	<div class="row">
		<div class="col-md-6">
			<div style="position: relative; border-radius: 5px; border: 1px solid #ccc; margin: 10px 0;">
			<img src="images/Vietnam_Regionen.gif" border="0" alt="" usemap="#Vietnam_Regionen_Map" class="map img-responsive">
			
			<map name="Vietnam_Regionen_Map">
			<area class="bac_trung_bo" shape="poly" alt="Bac Trung Bo" coords="168,139, 176,145, 190,155, 195,158, 204,163, 202,168, 196,180, 195,188, 191,197, 188,198, 192,200, 188,208, 186,209, 187,217, 195,229, 198,236, 209,246, 210,245, 221,254, 224,257, 224,263, 225,275, 232,282, 237,290, 254,305, 257,310, 260,311, 262,312, 264,311, 267,318, 270,321,
			274,325, 283,332, 287,338, 293,337, 297,341, 287,345, 286,347, 268,349, 256,343, 251,338, 243,332, 241,327, 234,330, 227,313, 226,306, 223,306, 219,298, 215,292, 209,291, 199,279, 195,275, 189,269, 180,250, 171,246, 164,238, 163,226, 147,221, 126,206, 122,203, 109,196, 110,194, 117,190, 118,184, 117,179, 147,176, 150,175,
			152,167, 158,162, 152,154, 147,153, 141,145, 133,142, 141,136" href="#">
			<area shape="poly" alt="Bac Trung Bo" coords="287,328, 286,331, 285,328" href="#">
			<area class="tay_bac_bo" shape="poly" alt="Tay Bac Bo" coords="54,36, 63,40, 68,45, 71,48, 75,47, 84,37, 87,33, 92,36, 94,41, 98,43, 98,50, 106,53, 104,58, 96,65, 97,68, 100,71, 104,77, 108,83, 126,86, 129,87, 130,98, 136,100, 142,99, 153,104, 156,114, 162,119, 174,120, 175,116, 180,118, 183,128, 193,142, 192,145, 189,146, 187,149, 182,147,
			177,146, 162,137, 139,132, 130,123, 122,120, 115,121, 106,126, 100,132, 86,126, 74,120, 64,103, 66,96, 69,92, 71,90, 70,83, 62,79, 59,87, 51,71, 39,57, 36,54, 38,49, 41,46, 43,43, 46,40, 46,37, 49,34, 51,33" href="#">
			
			<area class="dong_bac_bo" shape="poly" alt="Dong Bac Bo" coords="180,12, 187,21, 195,25, 203,26, 209,24, 219,30, 229,28, 237,34, 234,43, 228,44, 229,54, 232,64, 234,72, 244,73, 249,76, 252,83, 258,84, 261,85, 264,89, 269,89, 287,90, 291,94, 288,97, 285,93, 281,97, 268,103, 263,106, 265,109, 267,106, 272,107, 268,113, 265,113, 263,112, 259,118,
			257,119, 255,121, 251,120, 250,116, 245,121, 241,122, 244,124, 238,123, 231,116, 227,114, 224,108, 207,108, 201,106, 200,103, 188,96, 186,94, 181,92, 179,94, 173,95, 174,105, 173,119, 172,121, 158,116, 153,109, 151,103, 139,99, 129,96, 125,86, 106,82, 96,64, 98,61, 106,55, 104,51, 97,48, 97,41, 96,40, 99,34, 101,35, 115,45,
			121,33, 126,33, 127,36, 134,37, 141,32, 152,29, 155,17, 177,10" href="#">
			<area class="dong_bac_bo" shape="poly" alt="Dong Bac Bo" coords="285,99, 286,99, 287,99, 288,100, 287,101, 286,101, 285,101, 284,100" href="#">
			<area class="dong_bac_bo" shape="poly" alt="Dong Bac Bo" coords="279,105, 275,105, 281,103" href="#">
			
			<area shape="poly" alt="Bac Trung Bo" coords="193,156, 183,150, 183,149" href="#">
			<area shape="poly" alt="Bac Trung Bo" coords="201,160, 202,161" href="#">
			<area class="db_song_hong" shape="poly" alt="Dong Bang Song Hong" coords="184,92, 186,94, 192,101, 200,104, 205,109, 217,108, 225,109, 229,117, 236,119, 238,123, 239,127, 237,131, 234,134, 230,135, 226,149, 222,151, 226,152, 214,162, 211,165, 205,163, 203,161, 182,149, 183,146, 189,148, 190,145, 194,143, 191,136, 180,123, 178,116, 172,116,
			175,104, 174,98, 174,94, 180,93, 181,91" href="#">
			<area class="nam_trung_bo" shape="poly" alt="Nam Trung Bo" coords="300,343, 307,353, 316,366, 319,367, 320,374, 326,378, 328,381, 330,378, 334,393, 338,404, 341,412, 337,414, 342,416, 351,454, 351,465, 352,477, 356,484, 357,490, 359,498, 355,501, 352,505, 351,511, 352,520, 348,520, 351,525, 350,531, 350,543, 347,543, 347,548, 337,541, 333,539,
			329,529, 327,528, 326,517, 333,514, 335,507, 340,503, 326,495, 325,488, 333,481, 324,438, 321,413, 313,403, 303,395, 300,397, 299,399, 295,397, 293,388, 279,385, 257,363, 258,359, 267,354, 270,349, 282,348, 286,346, 293,341" href="#">
			<area shape="poly" alt="Nam Trung Bo" coords="304,348, 305,349" href="#">
			<area class="tay_nguyen" shape="poly" alt="Tay Nguyen" coords="295,390, 299,400, 302,396, 309,399, 323,415, 324,431, 331,469, 333,483, 324,490, 326,495, 341,503, 333,510, 332,516, 325,518, 324,542, 322,557, 320,561, 308,564, 304,572, 296,574, 290,570, 272,569, 268,565, 267,562, 262,559, 263,553, 266,548, 263,540, 258,531, 261,524, 271,523,
			274,520, 273,499, 271,489, 277,469, 273,461, 269,455, 266,443, 267,426, 271,422, 272,409, 271,401, 272,396, 276,393, 282,384" href="#">
			<area class="dong_nam_bo" shape="poly" alt="Dong Nam Bo" coords="259,528, 262,539, 266,551, 261,557, 273,566, 287,571, 306,571, 311,560, 321,559, 324,547, 328,530, 331,531, 337,541, 350,550, 345,559, 343,558, 341,564, 340,569, 337,569, 335,566, 334,570, 329,573, 323,577, 317,581, 309,587, 298,591, 294,597, 275,606, 274,610, 267,612, 253,613,
			250,610, 241,613, 242,605, 239,611, 230,602, 225,597, 223,589, 215,586, 211,586, 208,581, 204,579, 196,571, 195,560, 194,556, 202,552, 216,553, 222,551, 226,540, 252,531, 255,527" href="#">
			<area class="db_cuu_long" shape="poly" alt="Dong Bang Cuu Long" coords="193,587, 198,592, 203,594, 205,596, 210,593, 211,586, 222,587, 226,593, 229,601, 235,605, 233,609, 232,612, 236,613, 237,619, 228,621, 237,625, 234,630, 231,634, 225,633, 232,638, 229,641, 219,636, 223,642, 228,647, 220,655, 212,651, 206,643, 199,639, 203,645, 207,649,
			210,661, 208,665, 203,666, 203,667, 190,671, 191,674, 191,674, 188,671, 187,674, 182,674, 178,676, 178,677, 176,676, 166,691, 155,698, 142,698, 149,689, 144,689, 150,657, 151,654, 148,654, 153,640, 157,634, 160,635, 153,628, 148,625, 145,622, 140,624, 137,625, 134,618, 132,616, 135,609, 143,608, 152,604, 159,597, 159,589,
			169,592, 172,591, 173,589" href="#">
			<area shape="poly" alt="Dong Bang Cuu Long" coords="111,613, 109,631, 106,614" href="#">
			<area shape="poly" alt="Dong Bang Cuu Long" coords="153,635, 153,636, 153,637, 153,638, 152,638, 152,637, 152,636" href="#">
			<area shape="poly" alt="Dong Bang Cuu Long" coords="193,673, 192,674" href="#">
			<area shape="poly" alt="Dong Bang Cuu Long" coords="186,678, 187,678, 188,679, 188,680, 187,680, 186,680, 185,680, 185,679" href="#">
			<area shape="poly" alt="Dong Bang Cuu Long" coords="185,679, 186,680, 187,680, 188,679, 188,680, 187,680, 186,680, 185,680" href="#">
			</map>
			<div id="bac_trung_bo_txt" style="display:none; position:absolute; top: 250px; left: 60px; color: #00D500; text-transform:uppercase; font-weight:bold;">Khu vuc<br>bac trung bo</div>
			<div id="tay_bac_bo_txt" style="display:none; position:absolute; top: 130px; left: 10px; color: #F2E000; text-transform:uppercase; font-weight:bold;">Khu vuc<br>tay bac bo</div>
			<div id="dong_bac_bo_txt" style="display:none; position:absolute; top: 40px; left: 250px; color: #FFAE1A; text-transform:uppercase; font-weight:bold;">Khu vuc<br>dong bac bo</div>
			<div id="song_hong_txt" style="display:none; position:absolute; top: 140px; left: 240px; color: #FF6666; text-transform:uppercase; font-weight:bold;">Dong bang<br>song hong</div>

			<div id="cuu_long_txt" style="display:none; position:absolute; top: 640px; left: 250px; color: #FF24C2; text-transform:uppercase; font-weight:bold;">Đồng bằng<br>cửu long</div>

			<div id="tay_nguyen_txt" style="display:none; position:absolute; top: 440px; left: 160px; color: #2487FF; text-transform:uppercase; font-weight:bold;">Khu vực<br>tây nguyên</div>

			<div id="dong_nam_bo_txt" style="display:none; position:absolute; top: 580px; left: 340px; color: #C224FF; text-transform:uppercase; font-weight:bold;">Khu vực<br>đông nam bộ</div>

			<div id="nam_trung_bo_txt" style="display:none; position:absolute; top: 400px; left: 370px; color: #00DDD8; text-transform:uppercase; font-weight:bold;">Khu vực<br>nam trung bộ</div>
		</div>
		</div>

		<div class="col-md-6">
		</div>
	</div>
	<script type="text/javascript">
	$(".dong_nam_bo").mouseover( function(e){
	    e.preventDefault();
	    $('#dong_nam_bo_txt').show();
	});
	$(".dong_nam_bo").mouseout( function(e){
	    e.preventDefault();
	    $('#dong_nam_bo_txt').hide();
	});
	$(".tay_nguyen").mouseover( function(e){
	    e.preventDefault();
	    $('#tay_nguyen_txt').show();
	});
	$(".tay_nguyen").mouseout( function(e){
	    e.preventDefault();
	    $('#tay_nguyen_txt').hide();
	});

	$(".nam_trung_bo").mouseover( function(e){
	    e.preventDefault();
	    $('#nam_trung_bo_txt').show();
	});
	$(".nam_trung_bo").mouseout( function(e){
	    e.preventDefault();
	    $('#nam_trung_bo_txt').hide();
	});

	$(".db_cuu_long").mouseover( function(e){
	    e.preventDefault();
	    $('#cuu_long_txt').show();
	});
	$(".db_cuu_long").mouseout( function(e){
	    e.preventDefault();
	    $('#cuu_long_txt').hide();
	});

	$(".bac_trung_bo").mouseover( function(e){
	    e.preventDefault();
	    $('#bac_trung_bo_txt').show();
	});
	$(".bac_trung_bo").mouseout( function(e){
	    e.preventDefault();
	    $('#bac_trung_bo_txt').hide();
	});
	$(".tay_bac_bo").mouseover( function(e){
	    e.preventDefault();
	    $('#tay_bac_bo_txt').show();
	});
	$(".tay_bac_bo").mouseout( function(e){
	    e.preventDefault();
	    $('#tay_bac_bo_txt').hide();
	});
	$(".dong_bac_bo").mouseover( function(e){
	    e.preventDefault();
	    $('#dong_bac_bo_txt').show();
	});
	$(".dong_bac_bo").mouseout( function(e){
	    e.preventDefault();
	    $('#dong_bac_bo_txt').hide();
	});
	$(".db_song_hong").mouseover( function(e){
	    e.preventDefault();
	    $('#song_hong_txt').show();
	});
	$(".db_song_hong").mouseout( function(e){
	    e.preventDefault();
	    $('#song_hong_txt').hide();
	});
	
	</script>
@endsection
