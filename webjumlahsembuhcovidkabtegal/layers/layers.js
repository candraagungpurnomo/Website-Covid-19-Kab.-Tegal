var wms_layers = [];

var format_Kab_Tegal_0 = new ol.format.GeoJSON();
var features_Kab_Tegal_0 = format_Kab_Tegal_0.readFeatures(json_Kab_Tegal_0, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_Kab_Tegal_0 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_Kab_Tegal_0.addFeatures(features_Kab_Tegal_0);
var lyr_Kab_Tegal_0 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_Kab_Tegal_0, 
                style: style_Kab_Tegal_0,
                interactive: true,
    title: 'Kab_Tegal<br />\
    <img src="styles/legend/Kab_Tegal_0_0.png" /> 293 - 381<br />\
    <img src="styles/legend/Kab_Tegal_0_1.png" /> 381 - 575<br />\
    <img src="styles/legend/Kab_Tegal_0_2.png" /> 575 - 742<br />\
    <img src="styles/legend/Kab_Tegal_0_3.png" /> 742 - 944<br />\
    <img src="styles/legend/Kab_Tegal_0_4.png" /> 944 - 1532<br />'
        });

lyr_Kab_Tegal_0.setVisible(true);
var layersList = [lyr_Kab_Tegal_0];
lyr_Kab_Tegal_0.set('fieldAliases', {'ID': 'ID', 'ID_Kec': 'ID_Kec', 'Kecamatan': 'Kecamatan', 'xcoord': 'xcoord', 'ycoord': 'ycoord', 'kode_prop': 'kode_prop', 'kode_kab': 'kode_kab', 'covidsembuh_jml': 'covidsembuh_jml', });
lyr_Kab_Tegal_0.set('fieldImages', {'ID': 'TextEdit', 'ID_Kec': 'TextEdit', 'Kecamatan': 'TextEdit', 'xcoord': 'TextEdit', 'ycoord': 'TextEdit', 'kode_prop': 'TextEdit', 'kode_kab': 'TextEdit', 'covidsembuh_jml': 'Range', });
lyr_Kab_Tegal_0.set('fieldLabels', {'ID': 'inline label', 'ID_Kec': 'inline label', 'Kecamatan': 'inline label', 'xcoord': 'no label', 'ycoord': 'no label', 'kode_prop': 'inline label', 'kode_kab': 'inline label', 'covidsembuh_jml': 'inline label', });
lyr_Kab_Tegal_0.on('precompose', function(evt) {
    evt.context.globalCompositeOperation = 'normal';
});