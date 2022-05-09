<?php
    include "../koneksi.php";
    $sql="select * from puskesmas where lng>0";
    $hasil=mysqli_query($conn,$sql);

?>

var json_Puskesmas1_1 = {
"type":"FeatureCollection",
"name":"Puskesmas1_1","crs":{"type":"name","properties":{"name":"urn:ogc:def:crs:OGC:1.3:CRS84"}},

"features":[
    
    <?php
    while($data=mysqli_fetch_array($hasil)){
        $id = $data['id'];
        $nama = $data['nama'];
        $lat = $data['lat'];
        $lng = $data['lng'];
        //$jenis=3.000000;
    
    ?>
    
{"type":"Feature","properties":{"id":<?php echo $id; ?>,"nama":"<?php echo $nama; ?>"},"geometry":{"type":"Point","coordinates":[<?php echo $lng; ?>, <?php echo $lat; ?>]}},
<?php
    }
    ?>
    ]
}