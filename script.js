function hitungbarang(){
	var nama = (document.fform.inama.value);
	var pesan = (document.fform.ipesan.value);
	var jumlahbarang = (document.fform.ijumlah.value);

	var harga = 0.0;
	var total = 0.0;

	if (pesan == "CPU") {
		harga = 5000000;
	} else if (pesan == "Monitor") {
		harga = 3000000;
	} else if (pesan == "Keyboard") {
		harga = 500000;
	} else if (pesan == "RAM") {
		harga = 500000;
	} else if (pesan == "SSD") {
		harga = 1500000;
	} else if (pesan == "Hardisk") {
		harga = 2000000;
	} else if (pesan == "Mouse") {
		harga = 300000;
	} else if (pesan == "Komputer") {
		harga = 25000000;
	}

	jumlahbarang = document.fform.ijumlah.value;
	pesan = document.fform.ipesan.value;
	total = jumlahbarang * harga;


	document.fform.ojml.value = jumlahbarang;
	document.fform.opesan.value = pesan;
	document.fform.oharga.value = eval(harga);
	document.fform.ototal.value = eval(total);
}

function logout(){

	var konfirmasi = confirm("Apakah Anda Yakin Ingin Keluar?");
	if (konfirmasi) {
		window.location = "login.html";
		alert("Selamat Anda Berhasil Logout");
	} else {
		window.location = "home.html";
	}
}

function pesanbarang(){
	alert("Silahkan Lakukkan Pembayaran!");
}
