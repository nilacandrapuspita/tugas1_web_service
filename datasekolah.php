<?php
$data=file_get_contents ('https://datasekolahapi.herokuapp.com/api/data');
$datasekolah=json_decode($data);

$table = "<h1><center>DATA SEKOLAH SD DI JAKARTA</center></h1>";
$table .= "<table border = 1>";
$table .= "<tr><td>No</td>
				<td>NAMA </td>
				<td>NPSN</td>
				<td>ALAMAT</td>
                <td>KODE POS</td>
                <td>DESA</td>
                <td>KECAMATAN</td>
                <td>KABUPATEN</td>
                <td>PROVINSI</td>
                <td>STATUS</td>
                <td>JENJANG</td>";
                
for ($i = 0; $i <count($datasekolah->SD->Jakarta->Kepulauan_Seribu);$i++){
	$no = $i+1;
	$table .= "<tr>
				<td>{$no}</td>
				<td>{$datasekolah->SD->Jakarta->Kepulauan_Seribu[$i]->nama}</td>
				<td>{$datasekolah->SD->Jakarta->Kepulauan_Seribu[$i]->npsn}</td>
				<td>{$datasekolah->SD->Jakarta->Kepulauan_Seribu[$i]->alamat}</td>
                <td>{$datasekolah->SD->Jakarta->Kepulauan_Seribu[$i]->kodepos}</td>
                <td>{$datasekolah->SD->Jakarta->Kepulauan_Seribu[$i]->desa}</td>
                <td>{$datasekolah->SD->Jakarta->Kepulauan_Seribu[$i]->kecamatan}</td>
                <td>{$datasekolah->SD->Jakarta->Kepulauan_Seribu[$i]->kabupaten}</td>
                <td>{$datasekolah->SD->Jakarta->Kepulauan_Seribu[$i]->provinsi}</td>
                <td>{$datasekolah->SD->Jakarta->Kepulauan_Seribu[$i]->status}</td>
                <td>{$datasekolah->SD->Jakarta->Kepulauan_Seribu[$i]->jenjang}</td>
				</tr>";
}
for ($i = 0; $i <count($datasekolah->SD->Jakarta->Cilandak);$i++){
	$no = $i+14;
	$table .= "<tr>
				<td>{$no}</td>
				<td>{$datasekolah->SD->Jakarta->Cilandak[$i]->nama}</td>
				<td>{$datasekolah->SD->Jakarta->Cilandak[$i]->npsn}</td>
				<td>{$datasekolah->SD->Jakarta->Cilandak[$i]->alamat}</td>
                <td>{$datasekolah->SD->Jakarta->Cilandak[$i]->kodepos}</td>
                <td>{$datasekolah->SD->Jakarta->Cilandak[$i]->desa}</td>
                <td>{$datasekolah->SD->Jakarta->Cilandak[$i]->kecamatan}</td>
                <td>{$datasekolah->SD->Jakarta->Cilandak[$i]->kabupaten}</td>
                <td>{$datasekolah->SD->Jakarta->Cilandak[$i]->provinsi}</td>
                <td>{$datasekolah->SD->Jakarta->Cilandak[$i]->status}</td>
                <td>{$datasekolah->SD->Jakarta->Cilandak[$i]->jenjang}</td>
				</tr>";
}
for ($i = 0; $i <count($datasekolah->SD->Jakarta->Jagakarsa);$i++){
	$no = $i+44;
	$table .= "<tr>
				<td>{$no}</td>
				<td>{$datasekolah->SD->Jakarta->Jagakarsa[$i]->nama}</td>
				<td>{$datasekolah->SD->Jakarta->Jagakarsa[$i]->npsn}</td>
				<td>{$datasekolah->SD->Jakarta->Jagakarsa[$i]->alamat}</td>
                <td>{$datasekolah->SD->Jakarta->Jagakarsa[$i]->kodepos}</td>
                <td>{$datasekolah->SD->Jakarta->Jagakarsa[$i]->desa}</td>
                <td>{$datasekolah->SD->Jakarta->Jagakarsa[$i]->kecamatan}</td>
                <td>{$datasekolah->SD->Jakarta->Jagakarsa[$i]->kabupaten}</td>
                <td>{$datasekolah->SD->Jakarta->Jagakarsa[$i]->provinsi}</td>
                <td>{$datasekolah->SD->Jakarta->Jagakarsa[$i]->status}</td>
                <td>{$datasekolah->SD->Jakarta->Jagakarsa[$i]->jenjang}</td>
				</tr>";
}
for ($i = 0; $i <count($datasekolah->SD->Jakarta->Kebayoran_baru);$i++){
	$no = $i+81;
	$table .= "<tr>
				<td>{$no}</td>
				<td>{$datasekolah->SD->Jakarta->Kebayoran_baru[$i]->nama}</td>
				<td>{$datasekolah->SD->Jakarta->Kebayoran_baru[$i]->npsn}</td>
				<td>{$datasekolah->SD->Jakarta->Kebayoran_baru[$i]->alamat}</td>
                <td>{$datasekolah->SD->Jakarta->Kebayoran_baru[$i]->kodepos}</td>
                <td>{$datasekolah->SD->Jakarta->Kebayoran_baru[$i]->desa}</td>
                <td>{$datasekolah->SD->Jakarta->Kebayoran_baru[$i]->kecamatan}</td>
                <td>{$datasekolah->SD->Jakarta->Kebayoran_baru[$i]->kabupaten}</td>
                <td>{$datasekolah->SD->Jakarta->Kebayoran_baru[$i]->provinsi}</td>
                <td>{$datasekolah->SD->Jakarta->Kebayoran_baru[$i]->status}</td>
                <td>{$datasekolah->SD->Jakarta->Kebayoran_baru[$i]->jenjang}</td>
				</tr>";

}
for ($i = 0; $i <count($datasekolah->SD->Jakarta->Pasar_minggu);$i++){
	$no = $i+174;
	$table .= "<tr>
				<td>{$no}</td>
				<td>{$datasekolah->SD->Jakarta->Pasar_minggu[$i]->nama}</td>
				<td>{$datasekolah->SD->Jakarta->Pasar_minggu[$i]->npsn}</td>
				<td>{$datasekolah->SD->Jakarta->Pasar_minggu[$i]->alamat}</td>
                <td>{$datasekolah->SD->Jakarta->Pasar_minggu[$i]->kodepos}</td>
                <td>{$datasekolah->SD->Jakarta->Pasar_minggu[$i]->desa}</td>
                <td>{$datasekolah->SD->Jakarta->Pasar_minggu[$i]->kecamatan}</td>
                <td>{$datasekolah->SD->Jakarta->Pasar_minggu[$i]->kabupaten}</td>
                <td>{$datasekolah->SD->Jakarta->Pasar_minggu[$i]->provinsi}</td>
                <td>{$datasekolah->SD->Jakarta->Pasar_minggu[$i]->status}</td>
                <td>{$datasekolah->SD->Jakarta->Pasar_minggu[$i]->jenjang}</td>
				</tr>";
}
for ($i = 0; $i <count($datasekolah->SD->Jakarta->Pesanggrahan);$i++){
	$no = $i+218;
	$table .= "<tr>
				<td>{$no}</td>
				<td>{$datasekolah->SD->Jakarta->Pesanggrahan[$i]->nama}</td>
				<td>{$datasekolah->SD->Jakarta->Pesanggrahan[$i]->npsn}</td>
				<td>{$datasekolah->SD->Jakarta->Pesanggrahan[$i]->alamat}</td>
                <td>{$datasekolah->SD->Jakarta->Pesanggrahan[$i]->kodepos}</td>
                <td>{$datasekolah->SD->Jakarta->Pesanggrahan[$i]->desa}</td>
                <td>{$datasekolah->SD->Jakarta->Pesanggrahan[$i]->kecamatan}</td>
                <td>{$datasekolah->SD->Jakarta->Pesanggrahan[$i]->kabupaten}</td>
                <td>{$datasekolah->SD->Jakarta->Pesanggrahan[$i]->provinsi}</td>
                <td>{$datasekolah->SD->Jakarta->Pesanggrahan[$i]->status}</td>
                <td>{$datasekolah->SD->Jakarta->Pesanggrahan[$i]->jenjang}</td>	
				</tr>";
}
for ($i = 0; $i <count($datasekolah->SD->Jakarta->Setiabudi);$i++){
	$no = $i+253;
	$table .= "<tr>
				<td>{$no}</td>
				<td>{$datasekolah->SD->Jakarta->Setiabudi[$i]->nama}</td>
				<td>{$datasekolah->SD->Jakarta->Setiabudi[$i]->npsn}</td>
				<td>{$datasekolah->SD->Jakarta->Setiabudi[$i]->alamat}</td>
                <td>{$datasekolah->SD->Jakarta->Setiabudi[$i]->kodepos}</td>
                <td>{$datasekolah->SD->Jakarta->Setiabudi[$i]->desa}</td>
                <td>{$datasekolah->SD->Jakarta->Setiabudi[$i]->kecamatan}</td>
                <td>{$datasekolah->SD->Jakarta->Setiabudi[$i]->kabupaten}</td>
                <td>{$datasekolah->SD->Jakarta->Setiabudi[$i]->provinsi}</td>
                <td>{$datasekolah->SD->Jakarta->Setiabudi[$i]->status}</td>
                <td>{$datasekolah->SD->Jakarta->Setiabudi[$i]->jenjang}</td>
				</tr>";
}
for ($i = 0; $i <count($datasekolah->SD->Jakarta->Tebet);$i++){
	$no = $i+268;
	$table .= "<tr>
				<td>{$no}</td>
				<td>{$datasekolah->SD->Jakarta->Tebet[$i]->nama}</td>
				<td>{$datasekolah->SD->Jakarta->Tebet[$i]->npsn}</td>
				<td>{$datasekolah->SD->Jakarta->Tebet[$i]->alamat}</td>
                <td>{$datasekolah->SD->Jakarta->Tebet[$i]->kodepos}</td>
                <td>{$datasekolah->SD->Jakarta->Tebet[$i]->desa}</td>
                <td>{$datasekolah->SD->Jakarta->Tebet[$i]->kecamatan}</td>
                <td>{$datasekolah->SD->Jakarta->Tebet[$i]->kabupaten}</td>
                <td>{$datasekolah->SD->Jakarta->Tebet[$i]->provinsi}</td>
                <td>{$datasekolah->SD->Jakarta->Tebet[$i]->status}</td>
                <td>{$datasekolah->SD->Jakarta->Tebet[$i]->jenjang}</td>
				</tr>";
}
for ($i = 0; $i <count($datasekolah->SD->Jakarta->Jakarta_pusat);$i++){
	$no = $i+295;
	$table .= "<tr>
				<td>{$no}</td>
				<td>{$datasekolah->SD->Jakarta->Jakarta_pusat[$i]->nama}</td>
				<td>{$datasekolah->SD->Jakarta->Jakarta_pusat[$i]->npsn}</td>
				<td>{$datasekolah->SD->Jakarta->Jakarta_pusat[$i]->alamat}</td>
                <td>{$datasekolah->SD->Jakarta->Jakarta_pusat[$i]->kodepos}</td>
                <td>{$datasekolah->SD->Jakarta->Jakarta_pusat[$i]->desa}</td>
                <td>{$datasekolah->SD->Jakarta->Jakarta_pusat[$i]->kecamatan}</td>
                <td>{$datasekolah->SD->Jakarta->Jakarta_pusat[$i]->kabupaten}</td>
                <td>{$datasekolah->SD->Jakarta->Jakarta_pusat[$i]->provinsi}</td>
                <td>{$datasekolah->SD->Jakarta->Jakarta_pusat[$i]->status}</td>
                <td>{$datasekolah->SD->Jakarta->Jakarta_pusat[$i]->jenjang}</td>
				</tr>";
}
for ($i = 0; $i <count($datasekolah->SD->Jakarta->Pulo_gadung);$i++){
	$no = $i+330;
	$table .= "<tr>
				<td>{$no}</td>
				<td>{$datasekolah->SD->Jakarta->Pulo_gadung[$i]->nama}</td>
				<td>{$datasekolah->SD->Jakarta->Pulo_gadung[$i]->npsn}</td>
				<td>{$datasekolah->SD->Jakarta->Pulo_gadung[$i]->alamat}</td>
                <td>{$datasekolah->SD->Jakarta->Pulo_gadung[$i]->kodepos}</td>
                <td>{$datasekolah->SD->Jakarta->Pulo_gadung[$i]->desa}</td>
                <td>{$datasekolah->SD->Jakarta->Pulo_gadung[$i]->kecamatan}</td>
                <td>{$datasekolah->SD->Jakarta->Pulo_gadung[$i]->kabupaten}</td>
                <td>{$datasekolah->SD->Jakarta->Pulo_gadung[$i]->provinsi}</td>
                <td>{$datasekolah->SD->Jakarta->Pulo_gadung[$i]->status}</td>
                <td>{$datasekolah->SD->Jakarta->Pulo_gadung[$i]->jenjang}</td>	
				</tr>";
}
for ($i = 0; $i <count($datasekolah->SD->Jakarta->Cipayung);$i++){
	$no = $i+367;
	$table .= "<tr>
				<td>{$no}</td>
				<td>{$datasekolah->SD->Jakarta->Cipayung[$i]->nama}</td>
				<td>{$datasekolah->SD->Jakarta->Cipayung[$i]->npsn}</td>
				<td>{$datasekolah->SD->Jakarta->Cipayung[$i]->alamat}</td>
                <td>{$datasekolah->SD->Jakarta->Cipayung[$i]->kodepos}</td>
                <td>{$datasekolah->SD->Jakarta->Cipayung[$i]->desa}</td>
                <td>{$datasekolah->SD->Jakarta->Cipayung[$i]->kecamatan}</td>
                <td>{$datasekolah->SD->Jakarta->Cipayung[$i]->kabupaten}</td>
                <td>{$datasekolah->SD->Jakarta->Cipayung[$i]->provinsi}</td>
                <td>{$datasekolah->SD->Jakarta->Cipayung[$i]->status}</td>
                <td>{$datasekolah->SD->Jakarta->Cipayung[$i]->jenjang}</td>
				</tr>";
}
$table .="</table>";
echo $table;
?>