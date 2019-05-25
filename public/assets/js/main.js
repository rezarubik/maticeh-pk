function change() {
    if (document.getElementById('kota').value == 'jkt')
        document.getElementById("provinsi").value = 'dki';
    else if (document.getElementById('kota').value == 'jabar')
        document.getElementById("provinsi").value = 'pjabar';
    else if (document.getElementById('kota').value == 'jateng')
        document.getElementById("provinsi").value = 'pjateng';
    else if (document.getElementById('kota').value == 'jatim')
        document.getElementById("provinsi").value = 'pjatim';
    else if (document.getElementById('kota').value == 'banten')
        document.getElementById("provinsi").value = 'pbanten';
    else console.log("error");

};
